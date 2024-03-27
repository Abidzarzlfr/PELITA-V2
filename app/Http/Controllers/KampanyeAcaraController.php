<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampanyeAcaraController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.KampanyeAcara');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.KampanyeAcara');
    }
}
