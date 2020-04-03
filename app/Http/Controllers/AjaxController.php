<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\Subject;

class AjaxController extends Controller
{
    //----------------login credentials check--------------//

    function login_check(Request $request)
    {
    	$email    = $request->email;
    	$password = Hash::make($request->password);

//$user = User::select('*')->where([
  //  ['email', '=', $email], 
   // ['password', '=', $password]
     //               ])->get();
 $user = User::select(array('email','password'))
         ->where('email','=',$email)
         ->where('password','=',$password)->first();       
    //$user  = count($user);
    //$limit = '1'; 
   // echo $user;
    	if($user)
    	{

	  echo 'success';
    	
    	}else{

	  echo 'not';
    		
    	}

    }

    //-----------User subject update-----------------//


    public function su_submit(Request $request)
    {
    	$user_id = Auth::user()->id;
    	$subject = $request->subject;

    	Subject::where('user_id',$user_id)->with('subject_user')->update([
            'subject' => $subject
    	]);


    }

        //--------------User passsword---------------//
    public function user_update(Request $request)
    {
        $id       = Auth::user()->id;
        $password = Hash::make($request->password);
        $result =   User::where('id',$id)->update(['password' => $password]); 
            if ($result) 
            {

                echo 'success';

            }else{
                
                echo 'wrong';
            }
    }
}
