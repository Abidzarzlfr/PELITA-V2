<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class ArtikelPendidikanController extends Controller
{
    public function index()
    {
        $artikels = ArtikelPendidikanKesehatan::all();
        return view('layouts.ArtikelPendidikanKesehatan', compact('artikels'));
    }

    public function auth()
    {
        $artikels = ArtikelPendidikanKesehatan::all();
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.ArtikelPendidikanKesehatan', compact('artikels'));
        }
    }
}
