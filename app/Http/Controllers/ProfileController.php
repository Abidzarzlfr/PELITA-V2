<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.Profile');
        }
    }

    
}
