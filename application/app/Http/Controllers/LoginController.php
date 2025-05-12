<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index() : View
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        dd($credentials);
    }
    
}
