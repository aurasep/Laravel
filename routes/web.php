<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\RequestController; 

Route::get('/hallo', function () {
    return view('hallo'); 
});

Route::get('/', function () {
	return 'Hallo, aku sedang belajar membuat website dengan Laravel';
});

Route::get('/dashboard', [RoutesController::class, 'Dashboard']);

Route::match(['get', 'post'], '/anggota', function () {
	return 'Hallo, aku membuat route anggota dengan beberapa method';
});

Route::redirect('/buku', '/dashboard');

Route::get('/', [RequestController::class, 'store']);

Route::get('/nama', function() {
    $nama = session('nama');
    return 'Halaman nama dengan nama ' . $nama;
});

Route::get('/array', function () {
    return [1, 'Perpustakaan', true];
});

Route::get('/hello', function () {
    return response($content = 'Hallo Laravel')
        ->withHeaders([
            'Content-Type' => 'text/html',
            'X-Header-One' => 'Header Value 1',
            'X-Header-Two' => 'Header Value 2',
        ]);
});

Route::get('/tes', function () {
    return redirect()->action([RoutesController::class, 'Dashboard']);
});

Route::get('/login', [LoginController::class, 'login']);