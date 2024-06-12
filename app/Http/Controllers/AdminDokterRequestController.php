<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDokterRequestController extends Controller
{
    public function index()
    {
        $users = User::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.DokterRequest', compact('users'));
        }
    }

    public function confirmDokter(Request $request)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);

        $user->update(['dokter_request_status' => 'approved']);
        $user->update(['role' => 'dokter']);
        return redirect('/adminDokterRequest');
    }

    public function rejectedDokter(Request $request)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);

        $user->update(['dokter_request_status' => 'not requested']);
        $user->update(['role' => 'user']);
        return redirect('/adminDokterRequest');
    }
}
