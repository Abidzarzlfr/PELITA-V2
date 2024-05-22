<?php

namespace App\Http\Controllers;

use App\Models\AcaraKesehatanBalita;
use Illuminate\Http\Request;

class DetailAcaraKesehatanBalitaController extends Controller
{
    public function auth($id)
    {
        $acaraKesehatan = AcaraKesehatanBalita::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.AcaraKesehatanBalita', compact('acaraKesehatan'));
        }
    }
}
