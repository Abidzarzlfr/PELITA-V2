<?php

namespace App\Http\Controllers;

use App\Models\AcaraKesehatanBalita;
use Illuminate\Http\Request;

class AdminAcaraKesehatanBalitaController extends Controller
{
    public function index()
    {
        $acaraKesehatan = AcaraKesehatanBalita::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.AcaraKesehatanBalita', compact('acaraKesehatan'));
        }
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'foto_acara' => 'required|image|mimes:jpeg,png,jpg,gif',
            'pemateri' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'link_grup' => 'required',
            'isi_konten' => 'required',
            'status' => 'required',
            'tanggal' => 'required',
        ]);

        // Mengunggah gambar foto penerbit
        $fotoAcara = null;
        if ($request->hasFile('foto_acara')) {
            $destinationPath = 'images/acaraKesehatan/';
            $image = $request->file('foto_acara');
            $fotoAcara = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoAcara);
        }

        // Membuat entri baru di database
        AcaraKesehatanBalita::create([
            'judul' => $request->judul,
            'foto_acara' => $fotoAcara,
            'pemateri' => $request->pemateri,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'link_grup' => $request->link_grup,
            'isi_konten' => $request->isi_konten,
            'status' => $request->status,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }
}
