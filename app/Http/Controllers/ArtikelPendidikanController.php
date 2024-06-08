<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class ArtikelPendidikanController extends Controller
{
    public function index(Request $request)
    {
        $kelompokUsia = $request->input('kelompokUsia', 'semua');
        $kategori = $request->input('kategori', 'umum');

        $query = ArtikelPendidikanKesehatan::query();

        if ($kelompokUsia !== 'semua') {
            $query->where('kelompok_usia', $kelompokUsia);
        }

        if ($kategori !== 'umum') {
            $query->where('kategori', str_replace('_', ' ', $kategori));
        }

        $artikels = $query->get();

        return view('layouts.LayananLainnya.ArtikelPendidikanKesehatan', compact('artikels'));
    }

    public function auth(Request $request)
    {
        $kelompokUsia = $request->input('kelompokUsia', 'semua');
        $kategori = $request->input('kategori', 'umum');

        $query = ArtikelPendidikanKesehatan::query();

        if ($kelompokUsia !== 'semua') {
            $query->where('kelompok_usia', $kelompokUsia);
        }

        if ($kategori !== 'umum') {
            $query->where('kategori', str_replace('_', ' ', $kategori));
        }

        $artikels = $query->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.ArtikelPendidikanKesehatan', compact('artikels'));
        }
    }

    public function searchArtikel(Request $request)
    {
        $judul = $request->input('judul');

        $artikels = ArtikelPendidikanKesehatan::where('judul', 'like', '%' . $judul . '%')->get();

        return view('layouts.LayananLainnya.ArtikelPendidikanKesehatan', compact('artikels'));
    }
}
