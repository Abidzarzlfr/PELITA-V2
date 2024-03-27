<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanGiziController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.PanduanGizi');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.PanduanGizi');
    }
}
