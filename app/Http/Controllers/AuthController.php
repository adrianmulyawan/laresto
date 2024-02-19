<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        // Cek user sudah login atau belum
        if (Auth::check()) {
            // => Jika sudah login diarahkan ke dashboard
            return redirect()->route('dashboard');
        } else {
            // => Jika belum diarahkan kehalaman login
            return view('Auth.login');
        }
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $loginData = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($loginData)) {
            Alert::success('Hore!', 'Login Berhasil!');
            return redirect()->route('dashboard');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
