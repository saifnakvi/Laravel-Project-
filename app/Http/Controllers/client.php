<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class client extends Controller
    {
    public function Clients()
    {   
        $client = clients::all();
        return view('homeindex.index', compact('client'));
    }
    public function ClientCreate()
    {
        return view('frontend.clientreview');
    }
    public function CreateClient(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:20000'
        ]);
        
        // adding data to service table
        $Clientdata = new clients;
        $Clientdata-> name = $request->name;
        $Clientdata-> designation = $request->designation;
        $Clientdata-> comment = $request->comment;
        $Clientdata-> image = $request->image->store('public');
        $Clientdata-> save();

        return redirect()->back()->with('success', 'Client review added Successfully');

    }
    public function DeleteClient()
    {   
        $client = clients::all();
        return view('frontend.clientreview', compact('client'));
    }

    public function Clntdlt($id){
        $clientid = clients::find($id);
        if(!is_null($clientid)){
            $clientid->delete();
            return redirect()->back()->with('success', 'Client review deleted Successfully');
        }
    }
}
