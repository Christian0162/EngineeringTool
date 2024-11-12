<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //show login form
    public function showLoginForm() { 
        return view('auth.login');
    }

    public function login(Request $request) {
        $request = validate([
            'email' => 'required|email',
            'password' => 'required',            
        ]);

        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'invalid credentials.']);
    }

}
