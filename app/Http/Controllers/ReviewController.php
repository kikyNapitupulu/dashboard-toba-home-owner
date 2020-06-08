<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $data_review=\DB::table('review')->get();
        return view('admin.review',compact('data_review'));
    }

    public function edit($id)
    {
        $data_review = \DB::table('review')->where('id', $id)->first();
        return view('review.edit', compact('data_review','id'));
    }

    public function update(Request $request, $id)
    {
        switch($request->get('status'))
        {
            case 0:
                Review::postpone($id);
                break;
            case 1:
                Review::approve($id);
                break;
            case 2:
                Review::reject($id);
                break;
            default:    
                break;

        }
        return redirect('review');
    }
}