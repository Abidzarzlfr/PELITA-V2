<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.Admin', compact('users'));
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);

        // Update Name
        if ($request->filled('name_update')) {
            $user->name = $request->input('name_update');
        }
        // Update Email
        if ($request->filled('email_update')) {
            $user->email = $request->input('email_update');
        }

        $user->save();
        return redirect('/adminView');
    }
}
