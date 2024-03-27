<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
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
            // echo "sukses";
            // exit();
            return redirect('/beranda/auth');
        } else {
            return redirect('/login')->withErrors('Username dan password yang dimasukkan salah')->withInput();
        }
    }
}
