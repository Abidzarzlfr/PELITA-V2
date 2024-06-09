<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalArtikelDokterController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.Dokter.PortalArtikelDokter');
        }
    }
}
