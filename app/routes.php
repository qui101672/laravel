<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.scaffold');
});
Route::post('/', array('before' => 'csrf', 'uses' => 'Tai_khoansController@dangnhap'));

Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});

Route::resource('tai_khoans', 'Tai_khoansController');

Route::resource('bai_viets', 'Bai_vietsController');