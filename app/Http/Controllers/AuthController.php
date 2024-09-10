<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user,
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();

            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => $user,
            ], 200);
        }

        return response()->json([
            'error' => 'Unauthorized',
        ], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out successfully.',
        ], 200);
    }
}
