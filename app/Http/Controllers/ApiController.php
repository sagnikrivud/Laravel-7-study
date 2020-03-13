<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiController extends Controller
{
    //-----------------------User Register-----------------------// 

    public function user_store(Request $request)
    {
    	$user = new User;
    	$user->role_id = 2;
    	$user->name    = $request->name;
    	$user->email   = $request->email;
    	$user->password= $request->password;
    	$user->mobile  = $request->mobile;
    	$user->save();

    	return response()->json([
    		'message'  => 'New User Registered Successfully',
    	    'User'     =>  $user]);

    }
}
