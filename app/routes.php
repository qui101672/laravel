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

Route::get('/', array('as' => 'home', 'uses' => 'Bai_vietsController@index'));

Route::post('login', array('before' => 'csrf', 'uses' => 'Tai_khoansController@login'));

Route::get('login', array('as' => 'login', function () { 
	return View::make('login');
}))->before('guest');

Route::get('logout', array('as' => 'logout', function () { 
	Auth::logout();
    return Redirect::route('home')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::get('home', array('uses' => 'Bai_vietsController@index'));

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');

Route::resource('tai_khoans', 'Tai_khoansController');

Route::resource('bai_viets', 'Bai_vietsController');