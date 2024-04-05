<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorStuntingController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.KalkulatorStunting');
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.informasi-kesehatan.KalkulatorStunting');
        }
    }
}
