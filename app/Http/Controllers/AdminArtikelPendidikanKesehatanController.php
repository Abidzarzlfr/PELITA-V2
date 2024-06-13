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

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $artikel = ArtikelPendidikanKesehatan::findOrFail($id);
        $artikel->delete();

        return redirect()->back()->with('success', 'Artikel Pendidikan berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $artikelPendidikan = ArtikelPendidikanKesehatan::findOrFail($id);

        // Update judul jika disediakan
        if ($request->filled('judul_update')) {
            $artikelPendidikan->judul = $request->input('judul_update');
        }

        // Update kategori jika disediakan
        if ($request->filled('kategori_update')) {
            $artikelPendidikan->kategori = $request->input('kategori_update');
        }

        // Update status jika disediakan
        if ($request->filled('status_update')) {
            $artikelPendidikan->status = $request->input('status_update');
        }

        // Update kelompok_usia jika disediakan
        if ($request->filled('kelompok_usia_update')) {
            $artikelPendidikan->kelompok_usia = $request->input('kelompok_usia_update');
        }

        // Update nama penerbit jika disediakan
        if ($request->filled('nama_penerbit_update')) {
            $artikelPendidikan->nama_penerbit = $request->input('nama_penerbit_update');
        }

        // Mengelola pembaruan foto penerbit
        if ($request->hasFile('foto_penerbit_update')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoPenerbit/';
            $image = $request->file('foto_penerbit_update');
            $fotoPenerbit = 'images/artikelPendidikanKesehatan/fotoPenerbit/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoPenerbit);
            $artikelPendidikan->foto_penerbit = $fotoPenerbit;
        }

        // Mengelola pembaruan foto konten
        if ($request->hasFile('foto_konten_update')) {
            $destinationPath = 'images/artikelPendidikanKesehatan/fotoKonten/';
            $image = $request->file('foto_konten_update');
            $fotoKonten = 'images/artikelPendidikanKesehatan/fotoKonten/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
            $artikelPendidikan->foto_konten = $fotoKonten;
        }


        // Update isi konten jika disediakan
        if ($request->filled('isi_konten_update')) {
            $artikelPendidikan->isi_konten = $request->input('isi_konten_update');
        }

        // Update tanggal jika disediakan
        if ($request->filled('tanggal_update')) {
            $artikelPendidikan->tanggal = $request->input('tanggal_update');
        }

        $artikelPendidikan->save();
        return redirect('/adminArtikelPendidikanKesehatan');
    }
}
