<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DetailBeritaController extends Controller
{
    public function index($id) {
        $berita = Berita::find($id);
        return view('layouts.Detail.Berita', compact('berita'));
    }

    public function auth($id)
    {
        $berita = Berita::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.Berita', compact('berita'));
        }
    }
}
