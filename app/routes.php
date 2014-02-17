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
include('config/constant/roles.php');

Route::get('/', array('as' => 'home', 'uses' => 'Bai_vietsController@index'));

Route::post('login', array('before' => 'csrf', 'uses' => 'Tai_khoansController@login'));

Route::get('login', array('as' => 'login', function () { 
	return View::make('login');
}))->before('guest');

Route::get('logout', array('as' => 'logout', function () { 
	Auth::logout();
    return Redirect::route('home')
        ->with('flash_notice', 'Bạn đã đăng xuất khỏi hệ thống!!!');
}))->before('auth');

Route::get('profile', array('as' => 'profile', function () {
    return View::make('profile');
}))->before('auth');

Route::get('bai_viets/create', array('uses' => 'Bai_vietsController@create'))->before('auth');

Route::get('bai_viets/danhsachbaiviet', array('uses' => 'Bai_vietsController@danhsachbaiviet'))->before('auth');

Route::post('bai_viets/store', array('uses' => 'Bai_vietsController@store'))->before('auth');

Route::resource('tai_khoans', 'Tai_khoansController');

Route::resource('bai_viets', 'Bai_vietsController');

Route::resource('the_loai_bai_viets', 'The_loai_bai_vietsController');

Route::resource('nganhs', 'NganhsController');

Route::resource('don_vis', 'Don_visController');

Route::resource('sinh_viens', 'Sinh_viensController');

Route::resource('can_bos', 'Can_bosController');