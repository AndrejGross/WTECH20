<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function login(Request $request)
        {
            $loginData = $request->validate([
                'email' => 'email|required',
                'password' => 'required',
            ]);

            if (!auth()->attempt($loginData)) {
                return response([
                    'success' => false,
                    'message' => 'Invalid Credentials',
                ]);
            }

            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response([
                'success' => true,
                'user' => auth()->user(),
                'access_token' => $accessToken,
            ]);

        }
}
