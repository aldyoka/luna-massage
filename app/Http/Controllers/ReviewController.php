<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('index',[
            "data" => Review::where('status', true) -> get(),
            "data_konten" => Konten::all()
        ]);
    }

    public function submit(Request $request)
    {
        // return $request->file('img')->store('img');

        $validatedData = $request -> validate([
            'nama' => 'required',
            'review' => 'required|min:10',
            'img' => 'required|image|file|max:1024',
            'status' => 'required'
        ]);

        $validatedData['img'] = $request->file('img')->store('img');
        Review::create($validatedData);
        session()->flash('success','Thank for Your Review');
        return redirect('/');
    }
}
