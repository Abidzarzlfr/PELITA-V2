<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiDokterController extends Controller
{
    public function index() {
        return view('layouts.informasiDokter');
    }
}
