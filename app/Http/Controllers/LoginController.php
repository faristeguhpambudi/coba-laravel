<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login/index', [
            'title' => 'Login Page'
        ]);
    }

    public function authenticate(Request $request)
    {
        //validasi email dan password
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //redirect ke route dashboard
            return redirect()->intended('/dashboard');
        }
        //jika salah redirect sambil kirim session
        return back()->with('LoginError', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
