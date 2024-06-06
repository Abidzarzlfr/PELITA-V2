<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DetailRekomendasiDokter extends Controller
{
    public function auth($id){
        $detailRekomendasiDokter = User::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.RekomendasiDokter', compact('detailRekomendasiDokter'));
        }
    }
}
