<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('layouts.Berita');
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Berita');
        }
    }
}
