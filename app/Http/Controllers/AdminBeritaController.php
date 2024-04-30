<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    public function index()
    {

        $beritas = Berita::all();

        if (auth()->user()->role == 'user') {
            return redirect()->route('berandaAuth');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Admin.layouts.Berita', compact('beritas'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kategori' => 'required',
            'detail' => 'required',
            'tanggal' => 'required|date_format:Y-m-d',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {
            $destinationPath = 'images/berita/';
            $image = $request->file('foto');
            $fotoName = "images/berita/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoName);
        }

        Berita::create([
            'name' => $request->name,
            'kategori' => $request->kategori,
            'detail' => $request->detail,
            'tanggal' => $request->tanggal,
            'foto' => $fotoName,
        ]);

        return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
    }
}
