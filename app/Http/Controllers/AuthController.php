<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\NotificationSms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $method = $request->method;
        switch ($method) {
            case 'login':
                $res  = $this->login($request);
                break;
            case 'sendConfirmCode':
                $res = $this->sendConfirmCode($request);
                break;
            case 'register':
                $res = $this->register($request);
                break;
            case 'forget':
                $res = $this->forget($request);
                break;
            case  'checkMobileUniq':
                $res = $this->checkMobileUniq($request);
                break;
            default:
                $res = [
                    'status' => 500,
                    'message' => 'no command found'
                ];
        }
        return response()->json($res, $res['status']);
    }

    public function checkMobileUniq($request)
    {
        try {
            User::where('mobile', $request->mobile)->firstOrFail();
            return [
                'status' => 200,
                'message' => 'success',
            ];
        } catch (\Throwable $th) {
            return [
                'status' => 500,
                'message' => 'faild',
                'data' => 'user not signed up before'
            ];
        }
    }

    public function login($request)
    {
        try {
            $credentials = $request->only('mobile', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                return [
                    'status' => 200,
                    'message' => 'success',
                    'user' => $user
                ];
            }
            throw 'user password wrong';
        } catch (\Throwable $th) {
            return [
                'status' => 500,
                'message' => 'faild',
                'error' => $th->getMessage()
            ];
        }
    }
    public function register($request)
    {
        try {

            $code = Cache::get($request->mobile);
            $userCode = (int)$request->pincode;



            if ($code) {
                if ($code == $userCode) {
                    $user                       = new User;
                    $user->name               = $request->name;
                    $user->mobile               = $request->mobile;
                    $user->password             = bcrypt($request->password);
                    $user->settings             = collect(['locale' => 'fa']);
                    $user->role_id              = 2;
                    $user->save();
                    Auth::loginUsingId($user->id);

                    return  $res = [
                        'status' => 200,
                        'message' => 'user created successfull'
                    ];
                }
                throw 'code is wrong';
            }
            throw 'code expired';
        } catch (\Throwable $th) {
            return [
                'status' => 500,
                'message' => 'faild',
                'error' => 'code expired or is wrong'
            ];
        }
    }

    public function forget($request)
    {
        try {

            $code = Cache::get($request->mobile);
            $userCode = (int)$request->pincode;

            if ($code) {
                if ($code == $userCode) {
                    $user                       = User::where('mobile', $request->mobile)->firstOrFail();
                    $user->password             = bcrypt($request->password);
                    $user->save();
                    Auth::loginUsingId($user->id);

                    return  $res = [
                        'status' => 200,
                        'message' => 'user created successfull'
                    ];
                }
                throw 'code is wrong';
            }
            throw 'code expired';
        } catch (\Throwable $th) {
            return [
                'status' => 500,
                'message' => 'faild',
                'error' => 'code expired or is wrong'
            ];
        }
    }

    public function sendConfirmCode($request)
    {
        try {
            $code = $code = rand(11111, 99999);
            $stateSend = false;

            // if (!Cache::get($request->mobile)) {
            Cache::put($request->mobile, $code, now()->addMinutes(5));

            $user = new User();
            if (Auth::check()) {
                $user = Auth::user();
            }
            $user->notify(new NotificationSms('verify', $request->mobile, $code));

            $stateSend = true;

            return [
                'status' => 200,
                'message' => 'success',
                'stateSend' => $stateSend,
                'code' => $code
            ];
        } catch (\Throwable $th) {
            return [
                'status' => 500,
                'message' => 'faild',
                'error' => $th
            ];
        }
    }
}
