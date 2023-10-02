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

    public function submit(Request $request)
    {
        return $request->file('img')->store('img');

        $validatedData = $request -> validate([
            'nama' => 'required',
            'review' => 'required|min:10',
            'img' => 'required',
            'status' => 'required'
        ]);

        // dd($validatedData);
        Review::create($validatedData);
        session()->flash('success','Thank for Your Review');
        // return redirect('/');
    }
}
