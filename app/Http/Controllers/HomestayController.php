<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function homestay(){
        $data_homestay = \App\Homestay::all();
        return view('admin.homestay',['data_homestay'=> $data_homestay]); 
    }

    public function view($id){
        $data_homestay = \App\Homestay::find($id);
        return view('homestay.detail',['data_homestay'=> $data_homestay]); 
    }
    

    public function create(Request $request){
        \App\Homestay::create($request->all());
        return redirect('/homestay')->with('sukses','Data Save Successfully');
    }

    public function edit($id){
        $data_homestay = \App\Homestay::find($id);
        return view('homestay/edit', ['data_homestay'=> $data_homestay]);
    }

    public function update(Request $request, $id){
        //dd($request->all());
        $data_homestay = \App\Homestay::find($id);
        $data_homestay->update($request->all());
        if($request -> hasFile('header_image')){
            $request->file('header_image')->move('adminlte/img/',$request->file('header_file')->getClientOriginalName());
            $data_homestay->header_image = $request->file('header_image')->getClientOriginalName();
            $data_homestay->save();
        } 
        if ($request -> hasFile('img1')){
            $request->file('img1')->move('adminlte/img/',$request->file('img1_file')->getClientOriginalName());
            $data_homestay->img1 = $request->file('img1')->getClientOriginalName();
            $data_homestay->save();
        }
        if ($request -> hasFile('img2')){
            $request->file('img2')->move('adminlte/img/',$request->file('img2_file')->getClientOriginalName());
            $data_homestay->img2 = $request->file('img2')->getClientOriginalName();
            $data_homestay->save();
        }
        if ($request -> hasFile('img3')){
            $request->file('img3')->move('adminlte/img/',$request->file('img3_file')->getClientOriginalName());
            $data_homestay->img3 = $request->file('img3')->getClientOriginalName();
            $data_homestay->save();
        }if ($request -> hasFile('img4')){
            $request->file('img4')->move('adminlte/img/',$request->file('img4_file')->getClientOriginalName());
            $data_homestay->img4 = $request->file('img4')->getClientOriginalName();
            $data_homestay->save();
        }
        if ($request -> hasFile('img5')){
            $request->file('img5')->move('adminlte/img/',$request->file('img5_file')->getClientOriginalName());
            $data_homestay->img5 = $request->file('img5')->getClientOriginalName();
            $data_homestay->save();
        }
        if ($request -> hasFile('img6')){
            $request->file('img')->move('adminlte/img/',$request->file('img6_file')->getClientOriginalName());
            $data_homestay->img6 = $request->file('img6')->getClientOriginalName();
            $data_homestay->save();
        }  
        return redirect('/homestay')->with('sukses','Data Update Successfully');
    }

    
    public function delete($id){
        $data_homestay = \App\Homestay::find($id);
        $data_homestay->delete($data_homestay);
        return redirect('/homestay')->with('sukses','Data Delete Successfully');
    }

}