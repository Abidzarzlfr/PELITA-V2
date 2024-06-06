<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiDokterController extends Controller
{
    public function index()
    {
        return view('layouts.InformasiDokter');
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.InformasiDokter');
        }
    }
}
