<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananKesehatanController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.LayananKesehatan');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.LayananKesehatan');
    }
}
