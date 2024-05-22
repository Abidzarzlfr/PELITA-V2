<?php

namespace App\Http\Controllers;

use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class ProgramKebijakanController extends Controller
{
    public function index()
    {
        $programKebijakan = ProgramKebijakan::all();
        return view('layouts.LayananLainnya.ProgramKebijakan', compact('programKebijakan'));
    }

    public function auth()
    {
        $programKebijakan = ProgramKebijakan::all();
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.ProgramKebijakan', compact('programKebijakan'));
        }
    }
}
