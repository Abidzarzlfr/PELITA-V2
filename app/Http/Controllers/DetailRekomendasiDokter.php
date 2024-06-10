<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailRekomendasiDokter extends Controller
{
    public function auth($id)
    {
        $detailRekomendasiDokter = User::find($id);
        // Mendapatkan status konsultasi untuk pengguna saat ini dan dokter yang terkait
        $konsultasiStatus = Konsultasi::where('id_user', Auth::id())
            ->where('id_dokter', $id)
            ->first();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.RekomendasiDokter', compact('detailRekomendasiDokter', 'konsultasiStatus'));
        }
    }
}
