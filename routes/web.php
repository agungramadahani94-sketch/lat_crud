<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\SipalkomController;

Route::resource('products', ProductsController::class);
Route::resource('perpus', PerpusController::class);
Route::resource('sipalkom', SipalkomController::class);
Route::resource('absensi', AbsensiController::class);

Route::get('/login-view', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});