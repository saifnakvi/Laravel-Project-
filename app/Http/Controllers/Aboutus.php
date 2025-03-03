<?php

namespace App\Http\Controllers;

use App\Models\abouts;
use Illuminate\Http\Request;

class Aboutus extends Controller
{   
    public function aboutus()
    {   
        $Abus = abouts::all();
        return view('Pages.aboutus', compact('Abus'));
    }
    public function aboutCreate()
    {
        return view('frontend.aboutadd');
    }
    public function Createabout(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:20000'
        ]);
        
        // adding data to service table
        $AboutData = new abouts;
        $AboutData-> heading = $request->heading;
        $AboutData-> content = $request->content;
        $AboutData-> image = $request->image->store('public');
        $AboutData-> save();

        return redirect()->back()->with('success', 'About created Successfully');

    }
    public function DeleteAbout()
    {   
        $Abus = abouts::all();
        return view('frontend.aboutadd', compact('Abus'));
    }

    public function dltabt($id){
        $abtid = abouts::find($id);
        if(!is_null($abtid)){
            $abtid->delete();
            return redirect()->back()->with('success', 'About deleted Successfully');
        }
    }
}
