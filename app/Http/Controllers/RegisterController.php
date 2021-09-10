<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index', [
            'title' => "Register Page"
        ]);
    }

    public function store(Request $request)
    {
        //validasi form dan langsung disimpan ke variabel ketika lolos validasi
        $validatedData =  $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        //hashing password
        $validatedData['password'] = Hash::make($validatedData['password']);

        //menginput data ke database
        User::create($validatedData);

        //mengirim data flash
        $request->session()->flash('success', 'Registration Success, Please Login!');

        //redirect halaman
        return redirect('/login');
    }
}
