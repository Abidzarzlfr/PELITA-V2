<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class AdminArtikelPendidikanKesehatanController extends Controller
{
    public function index()
    {
        $artikelPendidikanKesehatan = ArtikelPendidikanKesehatan::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.ArtikelPendidikanKesehatan', compact('artikelPendidikanKesehatan'));
        }
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'kelompok_usia' => 'required',
            'nama_penerbit' => 'required',
            'foto_penerbit' => 'required|image|mimes:jpeg,png,jpg,gif',
            'foto_konten' => 'required|image|mimes:jpeg,png,jpg,gif',
            'isi_konten' => 'required',
            'tanggal' => 'required|date_format:Y-m-d',
        ]);

        // Mengunggah gambar foto penerbit
        $fotoPenerbit = null;
        if ($request->hasFile('foto_penerbit')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoPenerbit/';
            $image = $request->file('foto_penerbit');
            $fotoPenerbit = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoPenerbit);
        }

        // Mengunggah gambar foto konten
        $fotoKonten = null;
        if ($request->hasFile('foto_konten')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoKonten/';
            $image = $request->file('foto_konten');
            $fotoKonten = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
        }

        // Membuat entri baru di database
        ArtikelPendidikanKesehatan::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'kelompok_usia' => $request->kelompok_usia,
            'nama_penerbit' => $request->nama_penerbit,
            'foto_penerbit' => $fotoPenerbit,
            'foto_konten' => $fotoKonten,
            'isi_konten' => $request->isi_konten,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }
}
