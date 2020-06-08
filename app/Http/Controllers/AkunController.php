<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function view($id){
        $data_profil = \App\Profil::find($id);
        return view('admin.akun',['data_profil' => $data_profil]); 
    }

    public function show_visitor(){
        $data_profil = \App\Profil::where('role','Visitor')->get();
        return view('admin.visitor',['data_profil' => $data_profil]); 
        return view('admin.visitor'); 
    }

    public function create(Request $request){
        \App\Profil::create($request->all());
        return redirect('/visitor')->with('sukses','Data Save Successfully');
        return view('admin.visitor'); 
    }

    public function delete($id){
        $data_profil = \App\Profil::find($id);
        $data_profil->delete($data_profil);
        return redirect('/visitor')->with('sukses','Data Delete Successfully');
    }

    public function detail($id){
        $data_profil = \App\Profil::find($id);
        return view('visitor.detail',['data_profil' => $data_profil]);
    }

    public function edit($id){
        $profil = \App\Profil::find($id);
        return view('visitor.edit', ['profil'=> $profil]);
    }

    public function update(Request $request, $id){
        $profil = \App\Profil::find($id);
        $profil->update($request->all());
        return redirect('/visitor')->with('sukses','Data Update Successfully');
    }
}
