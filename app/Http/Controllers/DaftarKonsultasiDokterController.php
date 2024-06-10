<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class DaftarKonsultasiDokterController extends Controller
{
    public function daftarKonsultasi(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_dokter' => 'required',
            'tanggal' => 'required|date',
            'detail' => 'required|string',
        ]);

        // Simpan data konsultasi ke database
        $konsultasi = Konsultasi::create($validatedData);

        // Perbarui status konsultasi menjadi 'requested'
        $konsultasi->update(['konsultasi_request_status' => 'requested']);

        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect()->back()->with('success', 'Konsultasi berhasil dijadwalkan.');
    }
}
