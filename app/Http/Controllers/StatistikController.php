<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.Statistik');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.Statistik');
    }
}
