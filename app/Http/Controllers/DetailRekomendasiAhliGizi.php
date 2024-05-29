<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DetailRekomendasiAhliGizi extends Controller
{
    public function auth($id){
        $detailRekomendasiAhliGizi = User::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.RekomendasiAhliGizi', compact('detailRekomendasiAhliGizi'));
        }
    }
}
