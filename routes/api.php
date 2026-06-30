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

    // TEST dulu ini aman
    // kalau error, comment dulu
    Route::apiResource('absensi', AbsensiController::class);
});