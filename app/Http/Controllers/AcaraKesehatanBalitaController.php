<?php

namespace App\Http\Controllers;

use App\Models\AcaraKesehatanBalita;
use Illuminate\Http\Request;

class AcaraKesehatanBalitaController extends Controller
{
    public function index()
    {
        $acaraKesehatan = AcaraKesehatanBalita::all();
        $carouselAcara = AcaraKesehatanBalita::orderBy('created_at', 'desc')->take(3)->get();

        return view('layouts.LayananLainnya.AcaraKesehatanBalita', compact('acaraKesehatan', 'carouselAcara'));
    }

    public function auth()
    {
        $acaraKesehatan = AcaraKesehatanBalita::all();
        $carouselAcara = AcaraKesehatanBalita::orderBy('created_at', 'desc')->take(3)->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.AcaraKesehatanBalita', compact('acaraKesehatan', 'carouselAcara'));
        }
    }

    public function searchAcara(Request $request)
    {
        $judul = $request->input('judul');
        $acaraKesehatan = AcaraKesehatanBalita::where('judul', 'like', '%' . $judul . '%')->get();
        $carouselAcara = AcaraKesehatanBalita::orderBy('created_at', 'desc')->take(3)->get();

        return view('layouts.LayananLainnya.AcaraKesehatanBalita', compact('acaraKesehatan', 'carouselAcara'));
    }
}
