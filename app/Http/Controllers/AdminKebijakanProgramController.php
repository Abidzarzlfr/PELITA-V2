<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKebijakanProgramController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.KebijakanProgram');
        }
    }
}
