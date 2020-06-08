<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function homestay(){
        $data_homestay = \App\Homestay::count();
        return view('admin.dashboard', ['data_homestay'=> $data_homestay]);
   }
}
