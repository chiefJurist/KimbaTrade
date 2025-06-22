<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    //viewing login page
    public function showLogin()  {
        return view('auth.login');
    }

    //viewing register page
    public function showRegister() {
        return view('auth.register');
    }

    //viewing forgot password
    public function forgotPassword()  {
        return view('auth.forgot-password');
    }

    //validating the email address and sending the password reset
}
