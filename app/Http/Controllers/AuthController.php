<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPost(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('username', 'password');

    
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
    
        return response()->json(['user' => $user], 200);
    }
    return response()->json(['error' => 'Invalid username or password'], 401);
}

    
   
    public function registrationPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed' 
        ]);
        
        $data = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
        $user = User::create($data);
        
        if (!$user) {
            return response()->json(['error' => 'Failed to Register'], 500);
        }
        return response()->json(['message' => 'You have been registered successfully'], 201);
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete(); 
        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
