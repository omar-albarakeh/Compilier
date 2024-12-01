<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;
use App\Http\Middleware\JwtMiddleware;

Route::group(['middleware' => ['jwt']], function () {
    Route::get('/user', [JWTAuthController::class, 'getUser']);
    Route::post('/logout', [JWTAuthController::class, 'logout']);
});

