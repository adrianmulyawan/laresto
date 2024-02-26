<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SettingAccountController extends Controller
{
    public function profile()
    {
        return view('pages.dashboard.Settings.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id
        ]);

        $data = $request->all();

        Auth::user()->update($data);

        Alert::success('Hore', 'Profile Berhasil Diupdate!');
        return back();
    }

    public function changePassword()
    {
        return view('pages.dashboard.Settings.change-password');
    }
}
