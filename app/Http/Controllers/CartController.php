<?php

namespace App\Http\Controllers;

use App\GateWays\Zarinpal;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class CartController extends VoyagerBaseController
{
    public function addToCart(Request $request)
    {
        try {
            $curentCart = Cart::where('status', 'pending')->where('user_id', Auth::user()->id)->first();
            if (!$curentCart) {
                $curentCart = new Cart();
                $curentCart->user_id = Auth::user()->id;
                $curentCart->status = 'pending';
                $curentCart->save();
            }
            $count = $request->count;
            $old = DB::table('cart_product')->where('cart_id', $curentCart->id)->where('product_id', $request->id)->first();
            if (isset($old->count)) {
                $count += $old->count;
                $curentCart->products()->updateExistingPivot($request->id, ['count' => $count]);
            } else {
                $curentCart->products()->attach($request->id);
                $curentCart->products()->updateExistingPivot($request->id, ['count' => $count]);
            }

            return [
                'currentProduct' => $count,
                'count' => DB::table('cart_product')->where('cart_id', $curentCart->id)->count()
            ];
        } catch (\Throwable $th) {
            return response()->json([
                'data' => [
                    'status'  => 500,
                    'message' => $th->getMessage(),
                ],
            ], 500);
        }
    }
    public function showCart(Request $request)
    {
        try {
            $curentCart = Cart::where('status', 'pending')->where('user_id', Auth::user()->id)->with('products')->first();

            return view('front.cart.index', [
                'cart' => $curentCart,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'data' => [
                    'status'  => 500,
                    'message' => $th->getMessage(),
                ],
            ], 500);
        }
    }
    public function checkStock(Request $request)
    {
        try {
            $curentCart = Cart::find($request->cart['id']);
            $curentCart->address = $request->cart['address'];
            $curentCart->save();

            // check count and mojodi dar anbar
            $errorBecauseInvalid = false;
            foreach ($request->cart['products'] as $cart) {
                $product = Product::find($cart['id']);
                if ($cart['pivot']['count'] > $product->stock) {
                    $errorBecauseInvalid = true;
                    $curentCart->products()->updateExistingPivot($product, ['count' => $product->stock]);
                }
            }
            if ($errorBecauseInvalid)
                return 'invalid';
            return 'success';
        } catch (\Throwable $th) {
            return 'invalid';
        }
    }

    /** ------------------ start  zarbal ------------------- */

    public function paymentRequest(Request $request)
    {

        $cart = Cart::find($request->id);
        // calc amount and check count and mojodi dar anbar
        $amount = 0;
        foreach ($cart->products as $product) {
            $price = $product->offPrice ? $product->offPrice : $product->price;
            $amount += $product->pivot->count * $price;
        }

        /** ---------------------------- start pay with zarbal -------------- */
        $user = auth()->user();

        Cache::put("amount.$user->id", $amount, now()->addMinutes(20));
        Cache::put("order.$user->id", $request->id, now()->addMinutes(20));


        // return $order->amount;
        $MerchantID     = config('app.variableEnv.MerchantID');
        $Amount         = $amount;
        $Description     = env('APP_NAME');
        $Email             = $user->email;
        $Mobile         = $user->mobile;
        $CallbackURL     =  route("cart.verify");
        $ZarinGate         = config('app.variableEnv.ZarinGate');
        $SandBox         = config('app.variableEnv.SandBox');

        $zp     = new Zarinpal();
        $result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100) {
            // Success and redirect to pay
            $zp->redirect($result["StartPay"]);
        } else {
            // error
            echo "خطا در ایجاد تراکنش";
            echo "<br />کد خطا : " . $result["Status"];
            echo "<br />تفسیر و علت خطا : " . $result["Message"];
        }
    }

    public function verifyPayment(Request $request)
    {
        try {
            /** ---------------------------- start pay with zarbal -------------- */
            $user = auth()->user();

            $MerchantID     =  config('app.variableEnv.MerchantID');

            $Amount         = Cache::pull("amount.$user->id");
            $ZarinGate         = config('app.variableEnv.ZarinGate');
            $SandBox         = config('app.variableEnv.SandBox');

            $zp     = new Zarinpal();
            $result = $zp->verify($MerchantID, $Amount, $SandBox, $ZarinGate);


            if (isset($result["Status"]) && $result["Status"] == 100) {
                // Success
                $orderId = Cache::get("order.$user->id");


                $cart = Cart::find($orderId);
                // calc amount and check count and mojodi dar anbar
                foreach ($cart->products as $product) {
                    /** restore stock */
                    $product->stock -= $product->pivot->count;
                    $product->save();
                }

                $cart = Cart::find($orderId);
                $cart->status = 'paid';
                $cart->save();

                return view('front.payment.index', ['code' => $result["Authority"]]);
            } else {
                return view('front.payment.index');
            }
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }
    /** ------------------ start zarbal ------------------- */
}
