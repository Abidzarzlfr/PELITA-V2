<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RekomendasiDokterController extends Controller
{
    public function index()
    {
        $dokter = User::all();
        return view('layouts.RekomendasiDokter', compact('dokter'));
    }

    public function auth()
    {
        $dokter = User::all();
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.RekomendasiDokter', compact('dokter'));
        }
    }
}