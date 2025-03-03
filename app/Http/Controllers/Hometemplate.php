<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hometemplate extends Controller
    {   
        public function Homeindex()
        {
            return view('Homeindex.index');
        }

    }
