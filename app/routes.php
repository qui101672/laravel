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
	return View::make('hello');
});
Route::get('/login', function(){
	return View::make('login/login');
});
Route::post('login',function(){
	$userdata = array(
		'username' => Input::get('username') , 
		'password' => Input::get('password')
		);
	if (Auth::attempt($userdata)) {
		return Redirect::to('dashboard');
	}else{
		echo "Try again sucka!";
	}
});
Route::get('/singup', function(){
	return View::make('login/singup');
});
Route::post('singup',function(){
	$userdata = array('username' => Input::get('username'), 
		'ma_quyen' => Input::get('ma_quyen'),
		'password'=> Hash::make(Input::get('password')) 
		);
	$user = new User($userdata);
	$user->save();
	return Redirect::to('login');
});

Route::get('dashboard',array('before'=>'auth',function(){
	echo 'Welcome to your dashboard!<a href="'.URL::to('logout').'">Logout</a>';
}));
Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('login');
});

Route::resource('tai_khoans', 'Tai_khoansController');