<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class InformasiTerkiniController extends Controller
{
    public function index()
    {
        $artikels = ArtikelPendidikanKesehatan::orderBy('created_at', 'desc')->take(3)->get();
        $programKebijakan = ProgramKebijakan::orderBy('created_at', 'desc')->take(3)->get();

        return view('layouts.InformasiTerkini', compact('artikels', 'programKebijakan'));
    }

    public function auth()
    {
        $artikels = ArtikelPendidikanKesehatan::orderBy('created_at', 'desc')->take(3)->get();
        $programKebijakan = ProgramKebijakan::orderBy('created_at', 'desc')->take(3)->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.InformasiTerkini', compact('artikels', 'programKebijakan'));
        }
    }
}
