<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class DetailArtikelPendidikanKesehatan extends Controller
{
    public function index($id) {
        $artikels = ArtikelPendidikanKesehatan::find($id);
        return view('layouts.Detail.ArtikelPendidikanKesehatan', compact('artikels'));
    }

    public function auth($id)
    {
        $artikels = ArtikelPendidikanKesehatan::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.ArtikelPendidikanKesehatan', compact('artikels'));
        }
    }
}
