<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Token;
use Laravel\Passport\RefreshToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
         $validator = validator::make($request->all(), [
            'name' => ['required','string'],
            'email' => ['required','string','email','unique:users'],
            'password' =>['required','string','min:9'],
            'type_id' => ['required'],

        ]);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'code' => 409], 409);
        }

            $user =User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => hash::make($request->password),
                'type_id' =>$request->type_id,
            ]);


        $accessToken=$user->createToken('authToken')->accessToken;
        return response()->json([
            'message' => 'Successfully registered',
            'user'=>$user,
            'accessToken'=>$accessToken,
            'code'=>200
        ], 200);
    }

}
