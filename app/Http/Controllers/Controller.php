<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Lakukan proses autentikasi
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika login berhasil
            return redirect()->intended('/home'); // Sesuaikan dengan halaman tujuan setelah login
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
