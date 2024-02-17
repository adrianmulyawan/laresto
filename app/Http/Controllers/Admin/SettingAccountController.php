<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingAccountController extends Controller
{
    public function profile()
    {
        return view('pages.dashboard.Settings.profile');
    }

    public function changePassword()
    {
        return view('pages.dashboard.Settings.change-password');
    }
}
