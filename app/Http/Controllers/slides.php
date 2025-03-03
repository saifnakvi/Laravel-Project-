<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\slider;
use App\Models\Abouts;
use App\Models\whys;
use App\Models\teams;
use App\Models\clients;
use Illuminate\Http\Request;


class slides extends Controller
{   
    public function home()
    {   
        $slideImages = slider::all();
        $Serv = Services::all();
        $Abus = abouts::all();
        $whychose = whys::all();
        $Team = teams::all();
        $client = clients::all();
        return view('homeindex.index', compact('slideImages' , 'Serv', 'Abus', 'whychose', 'Team','client'));
    }
    public function form()
    {
        return view('frontend.form');
    }

    public function create(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:20000'
        ]);
        
        // adding data to slider table
        $sliderData = new slider;
        $sliderData-> heading = $request->heading;
        $sliderData-> content = $request->content;
        $sliderData-> image = $request->image->store('public');
        $sliderData-> save();

        return redirect()->back()->with('success', 'Image Upload Successfully');

    }
    public function SliderDelete()
    {   
        $slideImages = slider::all();
        return view('frontend.form', compact('slideImages'));
    }
    public function dltsl($id){
        $slid = slider::find($id);
        if(!is_null($slid)){
            $slid->delete();
            return redirect()->back()->with('success', 'Slide deleted Successfully');
        }
    }
}

