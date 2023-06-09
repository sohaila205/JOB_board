<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'code' => 201], 201);
        }

            $request->get('email');
            $log= ['email' => $request->get('email'), 'password'=>$request->get('password')];


            if(!Auth::attempt($log)){
                return response()->json([
                'message' => 'Unauthorized',
                'code'=>401
            ], 401);
        }

        $accessToken=Auth::user()->createToken('authToken')->accessToken;
        return response()->json([
            'user'=>Auth::user(),
            'accessToken'=>$accessToken,
            'code'=>200
        ],200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
            'code'=>200
        ],200);

    }
}
