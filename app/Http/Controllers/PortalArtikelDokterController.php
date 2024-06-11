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
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $artikel = ArtikelPendidikanKesehatan::findOrFail($id);
        $artikel->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $artikel = ArtikelPendidikanKesehatan::findOrFail($id);

        // Update judul jika disediakan
        if ($request->filled('judul-update')) {
            $artikel->judul = $request->input('judul-update');
        }

        // Update kategori jika disediakan
        if ($request->filled('kategori_update')) {
            $artikel->kategori = $request->input('kategori_update');
        }

        // Update status jika disediakan
        if ($request->filled('status_update')) {
            $artikel->status = $request->input('status_update');
        }

        // Update kelompok usia jika disediakan
        if ($request->filled('kelompok_usia_update')) {
            $artikel->kelompok_usia = $request->input('kelompok_usia_update');
        }

        // Update isi konten jika disediakan
        if ($request->filled('isi_konten_update')) {
            $artikel->isi_konten = $request->input('isi_konten_update');
        }

        // Mengelola pembaruan foto konten
        if ($request->hasFile('foto_konten_update')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoKontenDokter/';
            $image = $request->file('foto_konten_update');
            $fotoKonten = 'images/artikelPendidikanKesehatan/fotoKontenDokter/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
            $artikel->foto_konten = $fotoKonten;
        }

        $artikel->save();
        return redirect('/portalArtikelDokter');
    }
}
