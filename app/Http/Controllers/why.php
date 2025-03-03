<?php

namespace App\Http\Controllers;

use App\Models\whys;
use Illuminate\Http\Request;

class why extends Controller
{   
    public function whychose()
    {   
        $whychose = whys::all();
        return view('Pages.why', compact('whychose'));
    }
    public function WhyCreate()
    {
        return view('frontend.whyadd');
    }
    public function CreateWhy(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:20000'
        ]);
        
        // adding data to service table
        $Whydata = new whys;
        $Whydata-> heading = $request->heading;
        $Whydata-> content = $request->content;
        $Whydata-> image = $request->image->store('public');
        $Whydata-> save();

        return redirect()->back()->with('success', 'Why created Successfully');

    }
    public function DeleteWhy()
    {   
        $whychose = whys::all();
        return view('frontend.whyadd', compact('whychose'));
    }

    public function whydlt($id){
        $whyid = whys::find($id);
        if(!is_null($whyid)){
            $whyid->delete();
            return redirect()->back()->with('success', 'Why deleted Successfully');
        }
    }
}