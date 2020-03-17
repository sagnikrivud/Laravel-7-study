<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/user_store','ApiController@user_store')->name('user_store');
Route::post('/user_login','ApiController@user_login')->name('user_login');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();
//Route::post('/user_upload','ApiController@user_upload')->name('user_upload');    
//Route::get('/user_profile','ApiController@user_profile')->name('user_profile');


//});
Route::group(['middleware' => 'auth:api'], function(){
Route::post('/user_upload','ApiController@user_upload')->name('user_upload'); 
Route::get('/user_profile','ApiController@user_profile')->name('user_profile');
	});