<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Interfaces\UserRepositoryInterface;

class RegisterController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function index() : View
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $user = $this->userRepository->create($request->all());
        return redirect()->route('login.index');
    }
}
