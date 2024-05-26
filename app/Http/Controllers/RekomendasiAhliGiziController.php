<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiAhliGiziController extends Controller
{
    public function index()
    {
        return view('layouts.RekomendasiAhliGizi');
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.RekomendasiAhliGizi');
        }
    }
}
