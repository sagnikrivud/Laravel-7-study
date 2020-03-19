<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create','Auth\RegisterController@create')->name('create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/su_submit','AjaxController@su_submit')->name('su_submit');
Route::get('/back', 'Controller@back')->name('back');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/login_check','AjaxController@login_check')->name('login_check');
Route::post('/logout','Auth\LoginController@logout')->name('logout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
