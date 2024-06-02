<?php

namespace App\Http\Controllers;

use App\Models\LokasiPelayananKesehatan;
use App\Models\User;
use Illuminate\Http\Request;

class DetailLokasiPelayananKesehatanController extends Controller
{
    public function index($id) {
        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::find($id);
        $dokter = User::where('role', 'dokter')->where('id_lokasi', $id)->get();

        return view('layouts.Detail.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan', 'dokter'));
    }

    public function auth($id)
    {
        $lokasiPelayananKesehatan = LokasiPelayananKesehatan::find($id);
        $dokter = User::where('role', 'dokter')->where('id_lokasi', $id)->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.LokasiPelayananKesehatan', compact('lokasiPelayananKesehatan', 'dokter'));
        }
    }
}
