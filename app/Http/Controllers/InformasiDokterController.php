<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InformasiDokterController extends Controller
{
    public function index()
    {
        return view('layouts.InformasiDokter', ['showResultSearchAhliGizi' => false, 'dokters' => []]);
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.InformasiDokter', ['showResultSearchAhliGizi' => false, 'dokters' => []]);
        }
    }

    public function searchDokter(Request $request)
    {
        $namaDokter = $request->input('nama_dokter');

        // Cari dokter berdasarkan nama
        $dokters = User::where('role', 'dokter')
            ->where('name', 'like', '%' . $namaDokter . '%')
            ->get();

        // Jika ada dokter yang ditemukan, tampilkan result-search-ahli-gizi
        if ($dokters->isNotEmpty()) {
            return view('layouts.InformasiDokter', ['showResultSearchAhliGizi' => true, 'dokters' => $dokters]);
        }

        // Jika tidak ada dokter yang ditemukan, tetap tampilkan halaman normal
        // return view('layouts.InformasiDokter', ['showResultSearchAhliGizi' => false, 'dokters' => []]);
        return view('layouts.InformasiDokter', ['showResultSearchAhliGizi' => true, 'dokters' => $dokters]);
    }
}
