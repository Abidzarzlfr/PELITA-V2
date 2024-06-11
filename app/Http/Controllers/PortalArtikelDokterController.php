<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class PortalArtikelDokterController extends Controller
{
    public function index()
    {
        $artikelPendidikanKesehatan = ArtikelPendidikanKesehatan::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.Dokter.PortalArtikelDokter', compact('artikelPendidikanKesehatan'));
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
            'isi_konten' => 'required',
            // 'tanggal' => 'required|date_format:Y-m-d',
        ]);

        // Dapatkan id_dokter dari user yang sedang terautentikasi
        $idDokter = auth()->user()->id;

        // Dapatkan nama_penerbit dan foto_penerbit dari data user yang sedang terautentikasi
        $namaPenerbit = auth()->user()->name;
        $fotoPenerbit = auth()->user()->foto;

        // Mengunggah gambar foto konten
        $fotoKonten = null;
        if ($request->hasFile('foto_konten')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoKontenDokter/';
            $image = $request->file('foto_konten');
            $fotoKonten = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
        }

        // Membuat entri baru di database
        ArtikelPendidikanKesehatan::create([
            'id_dokter' => $idDokter,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'kelompok_usia' => $request->kelompok_usia,
            'nama_penerbit' => $namaPenerbit,
            'foto_penerbit' => $fotoPenerbit,
            'foto_konten' => $fotoKonten,
            'isi_konten' => $request->isi_konten,
            // 'tanggal' => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }
}
