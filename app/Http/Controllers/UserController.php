<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //------------------node js-------------------------//

    public function node_home()
    {
    	return view('nodejs.home');
    }





    // ----------------cylon js--------------------------//

    public function cylon_home()
    {
		return view('cylonjs.home');
    }
}
