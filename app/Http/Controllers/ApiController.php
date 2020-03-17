<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use App\OauthAccessToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; 
//use App\Mail\WelcomeMail;
//use App\OuthAccessToken;
use Mail;
use Validator;
//use App\OuthAccessToken;

class ApiController extends Controller
{

      public $successStatus = 200;
    //-----------------------User Register-----------------------// 

    public function user_store(Request $request)
    {
    	$user = new User;
    	$user->role_id = 2;
    	$user->name    = $request->name;
    	$user->email   = $request->email;
    	$user->password= Hash::make($request->password);
    	$user->mobile  = $request->mobile;
    	$user->save();

    	return response()->json([
    		'message'  => 'New User Registered Successfully',
    	    'User'     =>  $user]);

    }

      

        //------------------------User Login-----------------------//

     public function user_login(Request $request){ 
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {         
        //Attempt By User
            $user = Auth::user(); 
            // $rand = Str::random(12);
            //success array body contain user data
            $success['token']   =  $user->createToken('MyApp')-> accessToken;// Access token
            $success['name']    =  $user->name; // return Logged Name
            $success['email']   =  $user->email;
            $success['message'] = 'User Logged In'; 


            return response()->json(['success' => $success], $this-> successStatus);
            //return response()->json(['success' => $success]); 

        }else{

            return response()->json(['error'=>'Wrong Credentials'], 401); // If failed 
        } 
    }


    //--------------------------Pic Upload-------------------------//

     public function user_upload(Request $request){

     $user = Auth::user(); // retrieve The logged in user information
    
     $user->update([$user->avatar => $request->avatar]); //Update User Profile Picture
      
      $success['name']    = $user->name; 
      $success['avatar']  = $user->avatar; 
      $success['message'] = 'Image Uploaded successfully';
      return response()->json(['success'=>$success], $this-> successStatus); 
     
     }


     //---------------------Profile View--------------//
       public function user_profile() 
    { 
        $user = Auth::user(); 
        $role = $user->role;
        if($role=='1'){
          $role = 'Admin';
        }else{
          $role = 'User';
        }
        $success['email']     = $user->email;
        $success['avatar']    = $user->avatar;
        $success['role']      = $user->role;  //$role;    //if($user->role->'1'){echo "admin"}else{echo "User"};
        $success['User Type'] = $user->role->display_name; 
        $success['message']  = 'Welcome '.$user->name; // Retrive logged-in User 
        return response()->json(['success' => $success], $this-> successStatus); 
    } 




}
