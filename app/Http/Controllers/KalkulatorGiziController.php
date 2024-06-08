<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPendidikanKesehatan;
use Illuminate\Http\Request;

class KalkulatorGiziController extends Controller
{
    public function index()
    {
        return view('layouts.KalkulatorGizi');
    }

    public function auth()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.KalkulatorGizi');
        }
    }

    public function handlePost(Request $request)
    {
        // Ambil data dari permintaan POST
        $outputWFA = $request->input('outputWFA');
        $outputHFA = $request->input('outputHFA');
        $outputWFH = $request->input('outputWFH');

        dd($outputWFA, $outputHFA, $outputWFH);

        // Tentukan status gizi berdasarkan outputWFA, outputHFA, dan outputWFH
        $statusGizi = '';

        if ($outputWFA === "Berat badan sangat kurang (severely underweight)" || $outputWFA === "Berat badan kurang (underweight)") {
            $statusGizi = 'underweight';
        } elseif ($outputHFA === "Sangat pendek (severely stunted)" || $outputHFA === "Pendek (stunted)") {
            $statusGizi = 'stunting';
        } elseif ($outputWFH === "Gizi buruk (severely wasted)" || $outputWFH === "Gizi kurang (wasted)" || $outputWFH === "Berisiko gizi lebih (possible risk of overweight)" || $outputWFH === "Obesitas (obese)" || $outputWFH === "Gizi lebih (overweight)") {
            $statusGizi = 'overweight';
        } else {
            $statusGizi = 'unknown';
        }

        // Ambil data artikel berdasarkan status gizi
        $artikel = ArtikelPendidikanKesehatan::where('status', $statusGizi)->get();

        // Jika tidak ada artikel yang sesuai, tambahkan pesan konsultasi
        if ($artikel->isEmpty()) {
            return response()->json(['message' => 'Belum menemukan artikel yang sesuai. Jadwalkan konsultasi dengan dokter di Pelita'], 404);
        }

        // Jika ada artikel yang sesuai, kembalikan sebagai respons dalam bentuk JSON
        return response()->json($artikel);
    }
}
