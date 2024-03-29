<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user' || auth()->user()->role == 'dokter') {
            return redirect()->route('berandaAuth');
        } else {
            return view('layouts.Admin.Admin');
        }
    }
}
