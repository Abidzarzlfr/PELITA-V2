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
        $user->dokter_request_status = 'requested';
        $user->dokter_nik = $request->nik;
        $user->dokter_nip = $request->nip;
        $user->dokter_detail = $request->detail;

        $user->save();
        return redirect('/profile');
    }
}
