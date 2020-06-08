<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
        $data_booking = \App\Booking::all();
        return view('admin.booking',['data_booking'=>$data_booking]); 
    }

    public function view($id){
        $data_booking = \App\Booking::find($id);
        return view('booking.detail',['data_booking'=> $data_booking]); 
    }
}
