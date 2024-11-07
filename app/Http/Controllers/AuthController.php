<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function storeLogin(Request $request)
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }
}
