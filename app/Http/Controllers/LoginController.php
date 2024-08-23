<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login (){
        return view ('login');
        
    }

    public function proses(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil, regenerasi sesi
        $request->session()->regenerate();

        // Redirect ke halaman yang diinginkan
        return redirect()->intended('dashboard');
    }

    // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
    return redirect('login')->with([
        'gagal' => "Maaf nik atau Password anda salah",
    ])->withInput($request->only('email'));
}
}
