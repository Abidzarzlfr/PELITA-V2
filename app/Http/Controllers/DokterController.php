<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan ID dokter yang sedang login
        $id_dokter = Auth::id();

        // Mendapatkan semua data konsultasi yang terkait dengan dokter yang sedang login
        $permintaanKonsultasi = Konsultasi::where('id_dokter', $id_dokter)->get();

        // Mendapatkan semua data konsultasi yang terkait dengan dokter yang sedang login
        $widgetPermintaan = Konsultasi::where('id_dokter', $id_dokter)
            ->where('konsultasi_request_status', 'requested')
            ->count();

        $widgetJadwal = Konsultasi::where('id_dokter', $id_dokter)
            ->where('konsultasi_request_status', 'approved')
            ->count();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            // Format tanggal untuk dikirim ke view
            foreach ($permintaanKonsultasi as $konsultasi) {
                $konsultasi->tanggal = $konsultasi->tanggal->format('Y-m-d');
            }

            return view('layouts.Dokter.Dokter', compact('permintaanKonsultasi', 'widgetPermintaan', 'widgetJadwal'));
        }
    }



    public function confirmKonsultasi(Request $request, $id)
    {
        // Mendapatkan ID dokter yang sedang login
        $id_dokter = Auth::id();

        // Mencari data konsultasi berdasarkan ID dan id_dokter yang sedang login
        $konsultasi = Konsultasi::where('id', $id)
            ->where('id_dokter', $id_dokter)
            ->first();

        // Pastikan konsultasi ditemukan
        if ($konsultasi) {
            // Ubah status konsultasi menjadi "approved"
            $konsultasi->update(['konsultasi_request_status' => 'approved']);
            // Redirect ke halaman yang sesuai
            return redirect('/dokter');
        } else {
            // Handle jika konsultasi tidak ditemukan
            return redirect()->back()->with('error', 'Konsultasi tidak ditemukan.');
        }
    }

    public function rejected(Request $request, $id)
    {
        // Mendapatkan ID dokter yang sedang login
        $id_dokter = Auth::id();

        // Mencari data konsultasi berdasarkan ID dan id_dokter yang sedang login
        $konsultasi = Konsultasi::where('id', $id)
            ->where('id_dokter', $id_dokter)
            ->first();

        // Pastikan konsultasi ditemukan
        if ($konsultasi) {
            // Ubah status konsultasi menjadi "requested"
            $konsultasi->update(['konsultasi_request_status' => 'not requested']);
            // Redirect ke halaman yang sesuai
            return redirect('/dokter');
        } else {
            // Handle jika konsultasi tidak ditemukan
            return redirect()->back()->with('error', 'Konsultasi tidak ditemukan.');
        }
    }
}
