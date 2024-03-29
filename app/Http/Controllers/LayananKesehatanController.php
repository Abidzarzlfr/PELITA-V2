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
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.informasi-kesehatan.LayananKesehatan');
        }
    }
}
