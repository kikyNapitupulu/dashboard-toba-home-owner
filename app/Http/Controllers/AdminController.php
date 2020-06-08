<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $data_homestay = \App\Homestay::get();
        $data_booking = \App\Booking::get();
        $data_profil= \App\Profil::get();
        $data_review= \App\Review::get();
        return view('admin.dashboard', compact('data_homestay','data_booking','data_profil','data_profil','data_review')); 
    }
}
