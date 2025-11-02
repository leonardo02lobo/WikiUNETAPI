<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user','token'),201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if(!$token = Auth::attempt($credentials))
        {
            return response()->json(['error' => 'Credentials Invalided'],401);
        }
        return response()->json(compact('token'));
    }

    public function me()
    {
        return response()->json(Auth::user());
    }
}
