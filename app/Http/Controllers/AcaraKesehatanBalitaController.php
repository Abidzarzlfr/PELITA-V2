<?php

namespace App\Http\Controllers;

use App\Models\AcaraKesehatanBalita;
use Illuminate\Http\Request;

class AcaraKesehatanBalitaController extends Controller
{
    public function index()
    {
        $acaraKesehatan = AcaraKesehatanBalita::all();

        return view('layouts.LayananLainnya.AcaraKesehatanBalita', compact('acaraKesehatan'));
    }

    public function auth()
    {
        $acaraKesehatan = AcaraKesehatanBalita::all();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.AcaraKesehatanBalita', compact('acaraKesehatan'));
        }
    }
}
