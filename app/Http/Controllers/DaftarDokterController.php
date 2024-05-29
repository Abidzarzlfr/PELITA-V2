<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarDokterController extends Controller
{
    public function daftar(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->id_lokasi = $request->lokasi_id;
        $user->dokter_request_status = 'requested';
        $user->dokter_nomor_str = $request->dokter_nomor_str;

        $dokterDokumenStr = null;
        if ($request->hasFile('dokter_dokumen_str')) {
            $destinationPath = 'images/dokterDokumenStr/';
            $image = $request->file('dokter_dokumen_str');
            $dokterDokumenStr = $destinationPath . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $dokterDokumenStr);
        }

        $user->dokter_dokumen_str = $dokterDokumenStr;

        $user->dokter_kualifikasi = $request->dokter_kualifikasi;
        $user->dokter_hp = $request->dokter_hp;

        $user->save();
        return redirect('/profile');
    }
}
