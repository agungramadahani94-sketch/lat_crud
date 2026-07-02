<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KeseharianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\SipalkomController;
use App\Http\Controllers\TokoController;

Route::resource('products', ProductsController::class);
Route::resource('perpus', PerpusController::class);
Route::resource('sipalkom', SipalkomController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('keseharian', KeseharianController::class);
Route::resource('toko', TokoController::class);

Route::get('/login-view', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});