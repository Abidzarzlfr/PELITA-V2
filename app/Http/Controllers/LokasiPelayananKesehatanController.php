<?php

namespace App\Http\Controllers;

use App\Models\LokasiPelayananKesehatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LokasiPelayananKesehatanController extends Controller
{
    public function index()
    {
        // Untuk menghapus session
        Session::forget('provinsi');
        Session::forget('kota');

        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::all();
        return view('layouts.LayananLainnya.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan'));
    }

    public function auth()
    {
        // Untuk menghapus session
        Session::forget('provinsi');
        Session::forget('kota');

        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::all();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan'));
        }
    }

    public function filterLokasi(Request $request)
    {
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');

        // Simpan nilai yang dipilih dalam session
        Session::put('provinsi', $provinsi);
        Session::put('kota', $kota);

        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::when($provinsi, function ($query) use ($provinsi) {
            return $query->where('provinsi', $provinsi);
        })->when($kota, function ($query) use ($kota) {
            return $query->where('kota', $kota);
        })->get();

        return view('layouts.LayananLainnya.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan'));
    }
}
