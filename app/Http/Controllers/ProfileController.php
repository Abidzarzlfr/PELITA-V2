<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('adminView');
        } else {
            return view('layouts.Profile');
        }
    }

    public function edit(Request $request)
    {

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        // Update name if provided
        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        // Update email if provided
        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Handle profile image upload
        if ($request->hasFile('inputImage')) {
            $destinationPath = 'images/users/';
            $image = $request->file('inputImage');
            $profileImage = "images/users/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $user->foto = $profileImage;
        }

        $user->save();
        return redirect('/profile');
    }
}
