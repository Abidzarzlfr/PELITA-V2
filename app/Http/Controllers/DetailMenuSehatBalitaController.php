<?php

namespace App\Http\Controllers;

use App\Models\MenuSehatBalita;
use Illuminate\Http\Request;

class DetailMenuSehatBalitaController extends Controller
{
    public function index($id) {

        $menuSehat = MenuSehatBalita::find($id);
        $menuSehatLainnya = MenuSehatBalita::where('id', '!=', $id)->get();

        return view('layouts.Detail.MenuSehatBalita', compact('menuSehat', 'menuSehatLainnya'));
    }

    public function auth($id)
    {
        $menuSehat = MenuSehatBalita::find($id);
        $menuSehatLainnya = MenuSehatBalita::where('id', '!=', $id)->get();
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } elseif (auth()->user()->role == 'dokter') {
            return redirect()->route('dokter');
        } else {
            return view('layouts.Detail.MenuSehatBalita', compact('menuSehat', 'menuSehatLainnya'));
        }
    }
}
