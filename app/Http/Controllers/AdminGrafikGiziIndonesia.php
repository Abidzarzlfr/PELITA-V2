<?php

namespace App\Http\Controllers;

use App\Models\GrafikGiziIndonesia;
use Illuminate\Http\Request;

class AdminGrafikGiziIndonesia extends Controller
{
    public function index()
    {
        $grafikGizi = GrafikGiziIndonesia::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.GrafikGiziIndonesia', compact('grafikGizi'));
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $grafikGizi = GrafikGiziIndonesia::findOrFail($id);

        // Update tahun ke-1 jika disediakan
        if ($request->filled('tahun_1')) {
            $grafikGizi->tahun_1 = $request->input('tahun_1');
        }

        // Update tahun ke-2 jika disediakan
        if ($request->filled('tahun_2')) {
            $grafikGizi->tahun_2 = $request->input('tahun_2');
        }

        // Update tahun ke-3 jika disediakan
        if ($request->filled('tahun_3')) {
            $grafikGizi->tahun_3 = $request->input('tahun_3');
        }

        // Update nama penerbit jika disediakan
        if ($request->filled('tahun_4')) {
            $grafikGizi->tahun_4 = $request->input('tahun_4');
        }

        $grafikGizi->save();
        return redirect('/adminGrafikGiziIndonesia');
    }
}
