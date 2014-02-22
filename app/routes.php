<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
---------------------------------------------------------------------------| 
*/
include('config/constant/roles.php');

Route::group(array('before' => 'guest'), function()
{
    //Dang nhap
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
        Route::get('logout', array('uses' => 'QuanTriTaiKhoanController@logout'));
        //nguoi dung thong tin
        Route::get('profile', array('uses' => 'NguoiDungTaiKhoanController@profile'));
        Route::resource('thong_tin','NguoiDungTaiKhoanController');
        //hoi thi
        Route::resource('tai_khoan','QuanTriTaiKhoanController');

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
        //quan ly hoi thi
        Route::resource('hoi_this', 'QuanTriHoiThiController');
        
    } elseif(Session::get('role') == 'sinhvien'){

    } elseif(Session::get('role') == 'canbo'){

    } elseif(Session::get('role') == 'quanly'){

    } elseif(Session::get('role') == 'thuky'){

    } elseif(Session::get('role') == 'bantochuc'){

    } elseif(Session::get('role') == 'bangiamkhao'){

    }
});


//Route::resource('hinh_thuc_du_this', 'Hinh_thuc_du_thisController');
 


//Route::resource('vong_this', 'Vong_thisController');


