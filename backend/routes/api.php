<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;

// Public routes
Route::post('/register', [JWTAuthController::class, 'register'])->name('auth.register');
Route::post('/login', [JWTAuthController::class, 'login'])->name('auth.login');

// Protected routes (Require JWT authentication)
Route::middleware('jwt.auth')->group(function () {
    Route::get('/user', [JWTAuthController::class, 'getUser'])->name('auth.user');
    Route::post('/logout', [JWTAuthController::class, 'logout'])->name('auth.logout');
});
