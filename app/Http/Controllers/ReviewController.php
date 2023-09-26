<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('index',[
            "data" => Review::where('status', true) -> get()
        ]);
    }
}
