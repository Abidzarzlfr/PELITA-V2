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

        return redirect()->back()->with('success', 'Program Kebijakan berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $user = ProgramKebijakan::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Program Kebijakan berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $programKebijakan = ProgramKebijakan::findOrFail($id);

        // Update judul jika disediakan
        if ($request->filled('judul_update')) {
            $programKebijakan->judul = $request->input('judul_update');
        }

        // Update kategori jika disediakan
        if ($request->filled('kategori_update')) {
            $programKebijakan->kategori = $request->input('kategori_update');
        }

        // Update status jika disediakan
        if ($request->filled('status_update')) {
            $programKebijakan->status = $request->input('status_update');
        }

        // Update nama penerbit jika disediakan
        if ($request->filled('nama_penerbit_update')) {
            $programKebijakan->nama_penerbit = $request->input('nama_penerbit_update');
        }
        
        // Update tanggal jika disediakan
        if ($request->filled('tanggal_update')) {
            $programKebijakan->tanggal = $request->input('tanggal_update');
        }

        // Update isi konten jika disediakan
        if ($request->filled('isi_konten_update')) {
            $programKebijakan->isi_konten = $request->input('isi_konten_update');
        }

        // Mengelola pembaruan foto konten
        if ($request->hasFile('foto_konten_update')) {
            $destinationPath = 'images/programKebijakan/fotoKonten/';
            $image = $request->file('foto_konten_update');
            $fotoKonten = 'images/programKebijakan/fotoKonten/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoKonten);
            $programKebijakan->foto_konten = $fotoKonten;
        }

        // Mengelola pembaruan foto penerbit
        if ($request->hasFile('foto_penerbit_update')) {
            $destinationPath = 'images/programKebijakan/fotoPenerbit/';
            $image = $request->file('foto_penerbit_update');
            $fotoPenerbit = 'images/programKebijakan/fotoPenerbit/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoPenerbit);
            $programKebijakan->foto_penerbit = $fotoPenerbit;
        }

        // Update isi konten jika disediakan
        if ($request->filled('sumber_update')) {
            $programKebijakan->sumber = $request->input('sumber_update');
        }

        $programKebijakan->save();
        return redirect('/adminProgramKebijakan');
    }
}
