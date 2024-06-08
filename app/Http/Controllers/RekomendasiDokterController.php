<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RekomendasiDokterController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('layouts.RekomendasiDokter', compact('user'), ['showResultSearchAhliGizi' => false, 'dokters' => []]);
    }

    public function auth()
    {
        $user = User::all();
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.RekomendasiDokter', compact('user'), ['showResultSearchAhliGizi' => false, 'dokters' => []]);
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
            return view('layouts.RekomendasiDokter', ['showResultSearchAhliGizi' => true, 'dokters' => $dokters]);
        }

        // Jika tidak ada dokter yang ditemukan, tetap tampilkan halaman normal
        // return view('layouts.RekomendasiDokter', ['showResultSearchAhliGizi' => false, 'dokters' => []]);
        return view('layouts.RekomendasiDokter', ['showResultSearchAhliGizi' => true, 'dokters' => $dokters]);
    }
}
