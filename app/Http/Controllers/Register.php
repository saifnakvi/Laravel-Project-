<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Register extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->password = Hash::make($request->password);
        $userData->save();

        return redirect()->back()->with('success', 'User Registerd Successfully');
    }
    public function singIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $auth= $request->only('email','password');
        if(Auth::attempt($auth)){
            return redirect()->route('logIn1');
        }
    }
    public function logOut(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'User Logout Successfully');
    }
}
