<?php

namespace App\Http\Controllers;

use App\Models\ProgramKebijakan;
use Illuminate\Http\Request;

class ProgramKebijakanController extends Controller
{
    public function index(Request $request)
    {
        $namaPenerbit = $request->input('namaPenerbit', 'semua');
        $kategori = $request->input('kategori', 'umum');

        $query = ProgramKebijakan::query();

        if ($namaPenerbit !== 'semua') {
            $query->where('nama_penerbit', $namaPenerbit);
        }

        if ($kategori !== 'umum') {
            $query->where('kategori', str_replace('_', ' ', $kategori));
        }

        $programKebijakan = $query->get();

        return view('layouts.LayananLainnya.ProgramKebijakan', compact('programKebijakan'));
    }

    public function auth(Request $request)
    {
        $namaPenerbit = $request->input('namaPenerbit', 'semua');
        $kategori = $request->input('kategori', 'umum');

        $query = ProgramKebijakan::query();

        if ($namaPenerbit !== 'semua') {
            $query->where('nama_penerbit', $namaPenerbit);
        }

        if ($kategori !== 'umum') {
            $query->where('kategori', str_replace('_', ' ', $kategori));
        }

        $programKebijakan = $query->get();

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.ProgramKebijakan', compact('programKebijakan'));
        }
    }

    public function searchProgram(Request $request)
    {
        $judul = $request->input('judul');

        $programKebijakan = ProgramKebijakan::where('judul', 'like', '%' . $judul . '%')->get();

        return view('layouts.LayananLainnya.ProgramKebijakan', compact('programKebijakan'));
    }
}
