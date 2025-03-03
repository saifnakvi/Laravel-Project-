<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Service;

class TemplateController extends Controller
{
        public function index()
        {
        if(Auth::check()){
            return view('frontend.master');
        }
        else{
            return redirect('/login');
        }
    }
}
