<?php

namespace App\Http\Controllers;

use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class AdminProgramKebijakanController extends Controller
{
    public function index()
    {
        $programKebijakan = ProgramKebijakan::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.ProgramKebijakan', compact('programKebijakan'));
        }
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'nama_penerbit' => 'required',
            'foto_penerbit' => 'required|image|mimes:jpeg,png,jpg,gif',
            'foto_konten' => 'required|image|mimes:jpeg,png,jpg,gif',
            'isi_konten' => 'required',
            'tanggal' => 'required|date_format:Y-m-d',
            'sumber' => 'required',
        ]);

        // Mengunggah gambar foto penerbit
        $fotoPenerbit = null;
        if ($request->hasFile('foto_penerbit')) {
            $destinationPath = 'images/programKebijakan/fotoPenerbit/';
            $image = $request->file('foto_penerbit');
            $fotoPenerbit = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoPenerbit);
        }

        // Mengunggah gambar foto konten
        $fotoKonten = null;
        if ($request->hasFile('foto_konten')) {
            $destinationPath = 'images/programKebijakan/fotoKonten/';
            $image = $request->file('foto_konten');
            $fotoKonten = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
        }

        // Membuat entri baru di database
        ProgramKebijakan::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'nama_penerbit' => $request->nama_penerbit,
            'foto_penerbit' => $fotoPenerbit,
            'foto_konten' => $fotoKonten,
            'isi_konten' => $request->isi_konten,
            'tanggal' => $request->tanggal,
            'sumber' => $request->sumber,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }
}
