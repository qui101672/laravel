<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|GET /bai_viet                   | bai_viet.index    | QuanTriBaiVietController@index      |                |               |
|        | GET /bai_viet/create            | bai_viet.create   | QuanTriBaiVietController@create     |                |               |
|        | POST /bai_viet                  | bai_viet.store    | QuanTriBaiVietController@store      |                |               |
|        | GET /bai_viet/{bai_viet}        | bai_viet.show     | QuanTriBaiVietController@show       |                |               |
|        | GET /bai_viet/{bai_viet}/edit   | bai_viet.edit     | QuanTriBaiVietController@edit       |                |               |
|        | PUT /bai_viet/{bai_viet}        | bai_viet.update   | QuanTriBaiVietController@update     |                |               |
|        | PATCH /bai_viet/{bai_viet}      |                   | QuanTriBaiVietController@update     |                |               |
|        | DELETE /bai_viet/{bai_viet}     | bai_viet.destroy  | QuanTriBaiVietController@destroy    |      
*/
include('config/constant/roles.php');

Route::group(array('before' => 'guest'), function()
{
    Route::post('login', array('before' => 'csrf', 'uses' => 'NguoiDungTaiKhoanController@login'));

    Route::get('login', array('as' => 'login', function () { 
        return View::make('nguoidungtaikhoan.login');
    }));
    
});
Route::resource('tin_tuc', 'NguoiDungBaiVietController');
Route::get('/', array('as' => 'home', 'uses' => 'NguoiDungBaiVietController@index'));


Route::group(array('before' => 'auth'), function()
{
    //Dang Xuat
    Route::get('logout', array('as' => 'logout', function () { 
		Auth::logout();
	    return Redirect::route('home')
	        ->with('flash_notice', 'Bạn đã đăng xuất khỏi hệ thống!!!');
		}));
        //nguoi dung
        Route::get('profile', array('uses' => 'NguoiDungTaiKhoanController@profile'));
        Route::resource('thong_tin','NguoiDungTaiKhoanController');
        //hoi thi
        Route::get('hoi_thi',array('as' => 'hoi_tho', function () { 
        return View::make('quantrihoithi.index');
    }));


    if(Session::get('role') == 'admin'){
    	//quan ly bai viet
        Route::resource('bai_viet','QuanTriBaiVietController');
        //quan ly don vi
        Route::resource('don_vi','QuanTriDonViController');
        //quan ly lop
        Route::resource('lop', 'QuanTriLopController');
        //quan ly nganh
        Route::resource('nganh', 'QuanTriNganhController');
        //quan ly the loai bai viet
        Route::resource('the_loai_bai_viet', 'QuanTriTheLoaiBaiHatController');
        //quan ly tai khoan
        Route::resource('tai_khoan','QuanTriTaiKhoanController');
        
    } elseif(Session::get('role') == 'sinhvien'){

    } elseif(Session::get('role') == 'canbo'){

    } elseif(Session::get('role') == 'quanly'){

    } elseif(Session::get('role') == 'thuky'){

    } elseif(Session::get('role') == 'bantochuc'){

    } elseif(Session::get('role') == 'bangiamkhao'){

    }
});
