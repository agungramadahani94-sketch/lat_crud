<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;

// LOGIN (PUBLIC)
Route::post('/login', [AuthController::class, 'login']);

// PROTECTED
Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('absensi', AbsensiController::class);
});