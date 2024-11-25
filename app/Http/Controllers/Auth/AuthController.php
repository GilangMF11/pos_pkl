<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    // Login Proses
    public function loginProses(Request $request)
    {

    }

    // Register Proses
    public function registerProses(Request $request)
    {
        
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function logout()
    {
        return view('pages.auth.login');
    }
}
