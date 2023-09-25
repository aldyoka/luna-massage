<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('index',[
            "data" => Reviews::all()
        ]);
    }
}
