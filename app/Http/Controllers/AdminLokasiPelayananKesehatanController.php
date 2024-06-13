<?php

namespace App\Http\Controllers;

use App\Models\LokasiPelayananKesehatan;
use Illuminate\Http\Request;

class AdminLokasiPelayananKesehatanController extends Controller
{
    public function index()
    {
        $lokasiPelayanan = LokasiPelayananKesehatan::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.LokasiPelayananKesehatan', compact('lokasiPelayanan'));
        }
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lokasi' => 'required|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'foto_lokasi' => 'required|image|mimes:jpeg,png,jpg,gif',
            'tentang_lokasi' => 'required|string',
            'no_tlp_lokasi' => 'required|string',
            'alamat_lokasi' => 'required|string',
            'link_maps' => 'required|url',
        ]);

        // Mengunggah gambar foto penerbit
        $fotoLokasi = null;
        if ($request->hasFile('foto_lokasi')) {
            $destinationPath = 'images/lokasiPelayananKesehatan/';
            $image = $request->file('foto_lokasi');
            $fotoLokasi = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $fotoLokasi);
        }

        // Membuat entri baru di database
        LokasiPelayananKesehatan::create([
            'nama_lokasi' => $request->nama_lokasi,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'foto_lokasi' => $fotoLokasi,
            'tentang_lokasi' => $request->tentang_lokasi,
            'no_tlp_lokasi' => $request->no_tlp_lokasi,
            'alamat_lokasi' => $request->alamat_lokasi,
            'link_maps' => $request->link_maps,
        ]);

        return redirect()->back()->with('success', 'Lokasi Pelayanan Kesehatan berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::findOrFail($id);
        $lokasiPelayananKesehatan->delete();

        return redirect()->back()->with('success', 'Lokasi Pelayanan Kesehatan berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $lokasiPelayanan = LokasiPelayananKesehatan::findOrFail($id);

        // Update nama lokasi jika disediakan
        if ($request->filled('nama_lokasi_update')) {
            $lokasiPelayanan->nama_lokasi = $request->input('nama_lokasi_update');
        }

        // Update provinsi jika disediakan
        if ($request->filled('provinsi_update')) {
            $lokasiPelayanan->provinsi = $request->input('provinsi_update');
        }

        // Update kota jika disediakan
        if ($request->filled('kota_update')) {
            $lokasiPelayanan->kota = $request->input('kota_update');
        }

        // Update foto lokasi jika disediakan
        if ($request->hasFile('foto_lokasi_update')) {
            $destinationPath = 'images/lokasiPelayananKesehatan/';
            $image = $request->file('foto_lokasi_update');
            $fotoLokasi = 'images/lokasiPelayananKesehatan/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoLokasi);
            $lokasiPelayanan->foto_lokasi = $fotoLokasi;
        }

        // Update tentang lokasi jika disediakan
        if ($request->filled('tentang_lokasi_update')) {
            $lokasiPelayanan->tentang_lokasi = $request->input('tentang_lokasi_update');
        }

        // Update no telepon lokasi jika disediakan
        if ($request->filled('no_tlp_lokasi_update')) {
            $lokasiPelayanan->no_tlp_lokasi = $request->input('no_tlp_lokasi_update');
        }

        // Update alamat lokasi jika disediakan
        if ($request->filled('alamat_lokasi_update')) {
            $lokasiPelayanan->alamat_lokasi = $request->input('alamat_lokasi_update');
        }

        // Update link maps jika disediakan
        if ($request->filled('link_maps_update')) {
            $lokasiPelayanan->link_maps = $request->input('link_maps_update');
        }

        $lokasiPelayanan->save();
        return redirect('/adminLokasiPelayananKesehatan');
    }
}
