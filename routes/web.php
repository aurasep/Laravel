<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Pastikan controller diimpor dengan benar
use App\Http\Controllers\RequestController; // Pastikan controller ini ada

// Route untuk login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk halaman utama
Route::get('/', [RequestController::class, 'store']);

// Route untuk halaman 'hallo'
Route::get('/hallo', function () {
    return view('hallo'); // Pastikan ada file hallo.blade.php di resources/views
});
