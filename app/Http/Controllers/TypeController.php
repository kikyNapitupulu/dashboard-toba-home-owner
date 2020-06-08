<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function type(){
        $data_room = \App\Tipe_Room::all();
        return view('admin.type',['data_room' => $data_room]); 
    }

    public function create(Request $request){
        \App\Tipe_Room::create($request->all());
        return redirect('/type')->with('sukses','Data Save Successfully');
    }

    public function view($id){
        $data_room = \App\Tipe_Room::find($id);
        return view('type.detail',['data_room'=> $data_room]); 
    }

    public function edit($id){
        $type = \App\Tipe_Room::find($id);
        return view('type/edit', ['type'=> $type]);
    }

    public function update(Request $request, $id){
        $type = \App\Tipe_Room::find($id);
        $type->update($request->all());
        return redirect('/type')->with('sukses','Data Update Successfully');
    }

    public function delete($id){
        $type = \App\Tipe_Room::find($id);
        $type->delete($type);
        return redirect('/type')->with('sukses','Data Delete Successfully');
    }
}
