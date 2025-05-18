<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() : View
    {
        return view('login.index');
    }

    public function login(Request $request) : RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('app.home');
        }

        return redirect()->route('login')->with('error', 'Credenciais inválidas');
    }

    public function logout() : RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
    
}
