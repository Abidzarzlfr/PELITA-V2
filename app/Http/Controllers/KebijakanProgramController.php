<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebijakanProgramController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.KebijakanProgram');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.KebijakanProgram');
    }
}
