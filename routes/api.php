<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/v1/auth', [AuthController::class, 'index']);

Route::middleware('auth:sanctum')
    ->prefix('v1')->group(function () {
        Route::get('/user', [UserController::class, 'index']);
    });
