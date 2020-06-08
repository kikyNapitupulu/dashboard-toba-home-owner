<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function facilities(Request $request){
        if($request->has('cari')){
            $data_facilities = \App\Facilities::where('facility_name','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_facilities = \App\facilities::all();
        }
        return view('admin.facilities',['data_facilities' => $data_facilities]); 
    }

    public function create(Request $request){
        \App\facilities::create($request->all());
        return redirect('/facilities')->with('sukses','Data Save Successfully');
    }

    public function view($id){
        $data_facilities = \App\Facilities::find($id);
        return view('facilities.detail',['data_facilities'=> $data_facilities]); 
    }

    public function edit($id){
        $facilities = \App\facilities::find($id);
        return view('facilities/edit',['facilities' => $facilities]);
    }

    public function update(Request $request, $id){
        $facilities = \App\facilities::find($id);
        $facilities->update($request->all());
        return redirect('/facilities')->with('sukses','Data Update Successfully');
    }

    public function delete($id){
        $facilities = \App\facilities::find($id);
        $facilities->delete($facilities);
        return redirect('/facilities')->with('sukses','Data Delete Successfully');
    } 
}
