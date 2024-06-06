<?php

namespace App\Http\Controllers;

use App\Models\AcaraKesehatanBalita;
use App\Models\ArtikelPendidikanKesehatan;
use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $artikelPendidikanKesehatan = ArtikelPendidikanKesehatan::latest()->take(3)->get();
        $programKebijakan = ProgramKebijakan::latest()->take(3)->get();
        $acaraKesehatanBalita = AcaraKesehatanBalita::latest()->take(3)->get();

        return view('Beranda', compact('artikelPendidikanKesehatan', 'programKebijakan', 'acaraKesehatanBalita'));
    }

    public function auth()
    {
        $artikelPendidikanKesehatan = ArtikelPendidikanKesehatan::latest()->take(3)->get();
        $programKebijakan = ProgramKebijakan::latest()->take(3)->get();
        $acaraKesehatanBalita = AcaraKesehatanBalita::latest()->take(3)->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('Beranda', compact('artikelPendidikanKesehatan', 'programKebijakan', 'acaraKesehatanBalita'));
        }
    }
}
