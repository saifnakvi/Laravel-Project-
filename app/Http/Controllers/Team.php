<?php

namespace App\Http\Controllers;

use App\Models\teams;
use Illuminate\Http\Request;

class Team extends Controller
{   
    public function team()
    {   
        $Team = teams::all();
        return view('Pages.team', compact('Team'));
    }
    public function TeamCreate()
    {
        return view('frontend.teamadd');
    }
    public function CreateTeam(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|max:20000'
        ]);
        
        // adding data to service table
        $Teamdata = new teams;
        $Teamdata-> heading = $request->heading;
        $Teamdata-> content = $request->content;
        $Teamdata-> image = $request->image->store('public');
        $Teamdata-> save();

        return redirect()->back()->with('success', 'Team member added Successfully');

    }
    public function DeleteTeam()
    {   
        $Team = teams::all();
        return view('frontend.Teamadd', compact('Team'));
    }

    public function teamdlt($id){
        $teamid = teams::find($id);
        if(!is_null($teamid)){
            $teamid->delete();
            return redirect()->back()->with('success', 'Team member deleted Successfully');
        }
    }
}