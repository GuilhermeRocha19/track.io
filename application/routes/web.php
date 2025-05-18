<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/teste', function () {
    dd('teste');
});
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AppController::class, 'home'])->name('app.home');
    Route::post('/logout/store', [LoginController::class, 'logout'])->name('login.logout');
});