<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            // Pengguna sudah terautentikasi
            $user = auth()->user();
            if ($user->role == 'user' || $user->role == 'dokter') {
                return redirect()->route('berandaAuth');
            } elseif ($user->role == 'admin') {
                return redirect()->route('adminView');
            }
        }

        // Pengguna belum terautentikasi atau rolenya tidak terdefinisi
        return view('auth.Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi !',
            'password.required' => 'Password wajib diisi !',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'user') {
                return redirect('/beranda/auth');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('/adminView');
            } elseif (Auth::user()->role == 'dokter') {
                return redirect('/dokter');
            }
        } else {
            return redirect('/login')->withErrors('Username dan password yang dimasukkan salah')->withInput();
        }
    }
}
