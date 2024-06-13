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

        return redirect()->back()->with('success', 'Acara Kesehatan berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $user = AcaraKesehatanBalita::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Acara Kesehatan Balita berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $acaraKesehatan = AcaraKesehatanBalita::findOrFail($id);

        // Update judul jika disediakan
        if ($request->filled('judul_update')) {
            $acaraKesehatan->judul = $request->input('judul_update');
        }

        // Mengelola pembaruan foto acara
        if ($request->hasFile('foto_acara_update')) {
            $destinationPath = 'images/acaraKesehatan/';
            $image = $request->file('foto_acara_update');
            $fotoAcara = 'images/acaraKesehatan/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoAcara);
            $acaraKesehatan->foto_acara = $fotoAcara;
        }

        // Update pemateri jika disediakan
        if ($request->filled('pemateri_update')) {
            $acaraKesehatan->pemateri = $request->input('pemateri_update');
        }
        
        // Update jam mulai jika disediakan
        if ($request->filled('jam_mulai_update')) {
            $acaraKesehatan->jam_mulai = $request->input('jam_mulai_update');
        }

        // Update jam selesai jika disediakan
        if ($request->filled('jam_selesai_update')) {
            $acaraKesehatan->jam_selesai = $request->input('jam_selesai_update');
        }
        
        // Update link grup jika disediakan
        if ($request->filled('link_grup_update')) {
            $acaraKesehatan->link_grup = $request->input('link_grup_update');
        }

        // Update isi konten jika disediakan
        if ($request->filled('isi_konten_update')) {
            $acaraKesehatan->isi_konten = $request->input('isi_konten_update');
        }

        // Update isi status jika disediakan
        if ($request->filled('status_update')) {
            $acaraKesehatan->status = $request->input('status_update');
        }
        
        // Update isi tanggal jika disediakan
        if ($request->filled('tanggal_update')) {
            $acaraKesehatan->tanggal = $request->input('tanggal_update');
        }

        $acaraKesehatan->save();
        return redirect('/adminAcaraKesehatanBalita');
    }
}
