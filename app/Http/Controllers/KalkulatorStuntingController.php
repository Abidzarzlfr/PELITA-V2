<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorStuntingController extends Controller
{
    public function index()
    {
        return view('layouts.informasi-kesehatan.KalkulatorStunting');
    }

    public function auth()
    {
        return view('layouts.informasi-kesehatan.KalkulatorStunting');
    }
}
