<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');