<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('layouts.About');
    }

    public function auth()
    {
        return view('layouts.About');
    }
}
