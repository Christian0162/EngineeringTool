<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function showRegisterForm() {
        return view('auth.register');
    }
}
