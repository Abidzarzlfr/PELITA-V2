<?php

namespace App\Http\Controllers;

use App\Models\LokasiPelayananKesehatan;
use Illuminate\Http\Request;

class LokasiPelayananKesehatanController extends Controller
{
    public function index()
    {
        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::all();
        return view('layouts.LayananLainnya.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan'));
    }

    public function auth()
    {
        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::all();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan'));
        }
    }
}
