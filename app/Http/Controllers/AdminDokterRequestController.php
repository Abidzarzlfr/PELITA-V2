<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDokterRequestController extends Controller
{
    public function index()
    {
        // return view('layouts.Admin.layouts.DokterRequest');

        $users = User::all();

        if (auth()->user()->role == 'user' || auth()->user()->role == 'dokter') {
            return redirect()->route('berandaAuth');
        } else {
            return view('layouts.Admin.layouts.DokterRequest', compact('users'));
        }
    }

    public function confirmDokter(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update(['dokter_request_status' => 'approved']);
        $user->update(['role' => 'dokter']);
        return redirect('/adminDokterRequest');
    }
}
