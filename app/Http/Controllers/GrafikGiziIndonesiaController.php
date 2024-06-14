<?php

namespace App\Http\Controllers;

use App\Models\GrafikGiziIndonesia;
use Illuminate\Http\Request;

class GrafikGiziIndonesiaController extends Controller
{
    public function index()
    {
        // Ambil data grafik
        $underweightData = GrafikGiziIndonesia::where('status', 'underweight')->first();
        $stuntingData = GrafikGiziIndonesia::where('status', 'stunting')->first();
        $wastingData = GrafikGiziIndonesia::where('status', 'wasting')->first();
        $overweightData = GrafikGiziIndonesia::where('status', 'overweight')->first();

        return view('layouts.LayananLainnya.GrafikGiziIndonesia', compact('underweightData', 'stuntingData', 'wastingData', 'overweightData'));
    }

    public function auth()
    {
        // Ambil data grafik
        $underweightData = GrafikGiziIndonesia::where('status', 'underweight')->first();
        $stuntingData = GrafikGiziIndonesia::where('status', 'stunting')->first();
        $wastingData = GrafikGiziIndonesia::where('status', 'wasting')->first();
        $overweightData = GrafikGiziIndonesia::where('status', 'overweight')->first();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.GrafikGiziIndonesia', compact('underweightData', 'stuntingData', 'wastingData', 'overweightData'));
        }
    }
}
