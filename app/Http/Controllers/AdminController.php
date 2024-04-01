<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function showUsers()
    {
        $users = User::all();
        return view('layouts.Admin.Admin', compact('users'));
    }
}
