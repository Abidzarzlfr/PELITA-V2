<?php

namespace App\Http\Controllers;

use App\Models\MenuSehatBalita;
use Illuminate\Http\Request;

class MenuSehatBalitaController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category', 'semua_usia', '6_8_bulan', '9_11_bulan', '12_bulan_keatas');

        if ($category === 'semua_usia') {
            $menuSehat = MenuSehatBalita::all();
        } elseif ($category === '6_8_bulan') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '6-8 bulan')->get();
        } elseif ($category === '9_11_bulan') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '9-11 bulan')->get();
        } elseif ($category === '12_bulan_keatas') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '12 bulan keatas')->get();
        } else {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', $category)->get();
        }

        return view('layouts.LayananLainnya.MenuSehatBalita', compact('menuSehat'));
    }

    public function auth(Request $request)
    {
        $category = $request->input('category', 'semua_usia', '6_8_bulan', '9_11_bulan', '12_bulan_keatas');

        if ($category === 'semua_usia') {
            $menuSehat = MenuSehatBalita::all();
        } elseif ($category === '6_8_bulan') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '6-8 bulan')->get();
        } elseif ($category === '9_11_bulan') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '9-11 bulan')->get();
        } elseif ($category === '12_bulan_keatas') {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', '12 bulan keatas')->get();
        } else {
            $menuSehat = MenuSehatBalita::where('kelompok_usia', $category)->get();
        }

        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.LayananLainnya.MenuSehatBalita', compact('menuSehat'));
        }
    }
}
