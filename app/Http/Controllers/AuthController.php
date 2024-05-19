<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            return view('home');
        }
    
        return redirect(route('login'))->with('error', 'Invalid username or password');
    }
    
    function registrationPost(request $request){
        $request->validate([
            'username' => 'required',   
            'email' => 'required|email|unique:users',   
             'confirmPassword' => 'required',
             'password' => 'required']); 
            $data = [
                'username' => $request->input('username'), 
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'confirmPassword' => $request->input('confirmPassword')
            ];
        
            $user = User::create($data);
            if(!$user){
                return redirect()->route('register_post')->with('error','Failed to Register');
            }
        
            return redirect()->route('login')->with('success','You have been registered successfully');
        }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}