<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    function the_about()
    {
    	return view('about');
    }
}
