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

 

 
 
Route::resource('tai_khoans', 'Tai_khoansController');

Route::resource('bai_viets', 'Bai_vietsController');

Route::get('/', array('as' => 'home', function () {
    return View::make('home');
}));
Route::post('login', array('before' => 'csrf', 'uses' => 'Tai_khoansController@login'));
Route::get('login', array('as' => 'login', function () { 
	return View::make('login');
}))->before('guest');

Route::get('logout', array('as' => 'logout', function () { }))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');