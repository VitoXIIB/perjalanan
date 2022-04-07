<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            Alert::toast('Anda berhasil Masuk','success');
            return redirect('/utama');
        }
            return redirect('/login');
    }

    public function regis()
    {
        return view('auth.register');
    }

    public function postregis(request $request)
    {
        User::create([
            'nik' => $request -> nik,
            'nama' => $request -> nama,
            'telp' => $request -> telp,
            'email' => $request -> email,
            'username' => $request -> username,
            'role' => 'user',
            'password' => bcrypt($request -> password),
            'remember_token' =>str_random('60'),
        ]);
        Alert::toast('Anda berhasil Daftar','success');

        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        Alert::toast('Anda telah Keluar!','warning');
        return redirect('/login');
    }
}
