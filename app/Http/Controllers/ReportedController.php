<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportedController extends Controller
{
    public function reported(){
        return view('admin.reported'); 
    }
}
