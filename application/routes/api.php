<?php declare(strict_types=1);

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login/store', [LoginController::class, 'login'])->name('login.store');
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout/store', [LoginController::class, 'logout'])->name('login.logout');
});

Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');