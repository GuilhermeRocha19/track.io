<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index() : View
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return dd(auth()->user());
        }
        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }
    
}
