<?php

namespace App\Http\Controllers;

use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function app()
    {
        return view('layouts.app');
    }

    public function profile()
    {
        return view('layouts.profile'); 
    }

    public function jalan()
    {
        return view('layouts.jalan');
    }

    public function editprov($id)
    {
        $edit = User::find($id);
        return view('layouts.editprov',compact('edit'));
    }

    public function updateprov(request $request, $id)
    {
        $edit = User::find($id);
        $edit->nik=$request->nik;
        $edit->nama=$request->nama;
        $edit->telp=$request->telp;
        $edit->email=$request->email;
        $edit->alamat=$request->alamat;
        $edit->username=$request->username;
        $edit->save();

        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $edit->foto = $request->file('foto')->getClientOriginalName();
            $edit->save();
        }
        Alert::toast('Anda berhasil Mengubah Profile','success');

        return redirect('/profile');
    }
}
