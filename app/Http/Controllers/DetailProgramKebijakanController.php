<?php

namespace App\Http\Controllers;

use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class DetailProgramKebijakanController extends Controller
{
    public function index($id) {
        $programKebijakan = ProgramKebijakan::find($id);
        return view('layouts.Detail.ProgramKebijakan', compact('programKebijakan'));
    }

    public function auth($id)
    {
        $programKebijakan = ProgramKebijakan::find($id);
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.ProgramKebijakan', compact('programKebijakan'));
        }
    }
}
