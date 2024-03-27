<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8',
        // ], [
        //     'name.required' => 'Nama wajib diisi!',
        //     'email.required' => 'Email wajib diisi!',
        //     'email.email' => 'Email tidak valid!',
        //     'email.unique' => 'Email sudah terdaftar!',
        //     'password.required' => 'Password wajib diisi!',
        //     'password.min' => 'Password minimal 8 karakter!',
        // ]);

        // $register = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // // Buat pengguna baru
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);

        // // Simpan pengguna ke dalam database
        // $user->save();

        // // Redirect atau sesuaikan dengan kebutuhan aplikasi Anda
        // return redirect('/login')->with('success', 'Akun berhasil dibuat! Silakan masuk.');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah terdaftar!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 8 karakter!',
            'password.confirmed' => 'Konfirmasi password tidak sesuai!',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Simpan pengguna ke dalam database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect atau sesuaikan dengan kebutuhan aplikasi Anda
        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silakan masuk.');
    }
}
