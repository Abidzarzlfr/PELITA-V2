<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.Dokter.Dokter');
        }
    }
}
