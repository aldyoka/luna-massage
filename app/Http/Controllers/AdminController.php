<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gallery(){
        return view('gallery',[
            "title" => "Gallery Management"
        ]);
    }

    public function konten(){
        return view('konten',[
            "title" => "Konten Management",
            "data_konten" => Konten::all()
        ]);
    }

    public function addKonten(Request $request)
    {
        // return $request->file('img')->store('img');
        // dd($request);
        $validatedData = $request -> validate([
            'judul' => 'required',
            'isi' => 'required|min:10',
            'harga' => 'required',
            'status' => 'required'
        ]);

        Konten::create($validatedData);
        session()->flash('success','Thank for Your Review');
        return redirect('/konten');
    }
}


