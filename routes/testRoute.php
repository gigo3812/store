<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Notifications\NotificationSms;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {

    $user = User::find(1);
    $user->notify(new NotificationSms('verify', '09157915935', '2222'));
    return $user;
    return 'test';
});
Route::get('lgn', function () {
    return Auth::loginUsingId(1);
});
Route::get('logout', function () {
    return Auth::logout();
});
Route::get('cart', function () {


    return view('front.payment.index');

    // $cart = new Cart();
    // $cart->user_id = 1;
    // $cart->save();

    $cart = Cart::find(3);
    $amount = 0;
    foreach ($cart->products as $product) {
        $price = $product->offPrice ? $product->offPrice : $product->price;
        $amount += $product->pivot->count * $price;
    }

    return $amount;

    // $cart->products()->attach($product);
    // $cart->products()->detach($product);
    // $cart->products()->updateExistingPivot($product->id, ['count' => 5]);
    // return $cart->pivot;
});
