<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'email'=> 'required|email|unique:users',
            'password' => 'required|string|min:8 ',
        ]);

        /** @var User $user */
        $user = User::create($validateData);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}