<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class Service extends Controller
{   
    public function Services()
    {   
        $Serv = services::all();
        return view('Pages.services', compact('Serv'));
    }
    public function addservices()
    {
        return view('frontend.addservices');
    }
    public function Createservices(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:2000'
        ]);
        
        // adding data to service table
        $ServicesData = new services;
        $ServicesData-> heading = $request->heading;
        $ServicesData-> content = $request->content;
        $ServicesData-> image = $request->image->store('public');
        $ServicesData-> save();

        return redirect()->back()->with('success', 'Service created Successfully');

    }
    public function ServicesDelete()
    {   
        $Serv = services::all();
        return view('frontend.addservices', compact('Serv'));
    }

    public function dltserv($id){
        $srvid = Services::find($id);
        if(!is_null($srvid)){
            $srvid->delete();
            return redirect()->back()->with('success', 'Service deleted Successfully');
        }
    }
}
