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


Route::resource('tin_tuc', 'NguoiDungBaiVietController');

Route::get('/', array('as' => 'home', 'uses' => 'NguoiDungBaiVietController@index'));

Route::group(array('before' => 'guest'), function()
{
    //Dang nhap
    Route::post('login', array('before' => 'csrf', 'uses' => 'NguoiDungTaiKhoanController@login'));
    Route::get('login', array('as' => 'login', function () { 
        return View::make('nguoidungtaikhoan.login');
    }));
    
});

Route::group(array('before' => 'auth'), function()
{
        //Dang Xuat
        Route::get('logout', array('uses' => 'QuanTriTaiKhoanController@logout'));
        //nguoi dung thong tin
        Route::get('profile', array('uses' => 'NguoiDungTaiKhoanController@profile'));
        
        Route::resource('thong_tin','NguoiDungTaiKhoanController');

        Route::resource('dang_ky_phieus', 'NguoiDungPhieuDangKyController');

        Route::resource('dang_ky_tiet_mucs', 'NguoiDungPhieuDangKyController');

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
        //quan ly hinh thuc du thi
        Route::resource('hinh_thuc_du_this', 'QuanTriHinhThucDuThiController');
        Route::post('post_dshinhthuc',array('uses'=>'QuanTriHinhThucDuThiController@post_dshinhthuc'));
        //quan ly vong thi
        Route::resource('vong_this', '');
        Route::post('post_dsvongthi',array('uses'=>'QuanTriVongThiController@post_dsvongthi'));
        //quan ly bgks
        Route::resource('ban_giam_khaos', 'QuanTriBGKController');
        //quan ly btc
        Route::resource('ban_to_chuc', 'QuanTriBTCController');
        //quan phieu dang ky
        Route::resource('phieu_dang_kies', 'QuanTriPhieuDangKyController');
        
        Route::resource('tiet_muc_du_this', 'QuanTriTietMucController');

        Route::resource('quan_tri_ket_qua', 'QuanTriKetQuaController');
        Route::post('ds_tietmuc_cham_diem',array('uses'=>'QuanTriKetQuaController@ds_tietmuc_cham_diem'));
        

    } elseif(Session::get('role') == 'sinhvien'){

    } elseif(Session::get('role') == 'canbo'){

    } elseif(Session::get('role') == 'quanly'){

    } elseif(Session::get('role') == 'thuky'){

    } elseif(Session::get('role') == 'bantochuc'){

    } elseif(Session::get('role') == 'bangiamkhao'){

    }
});

// Route::resource('danh_muc_nams', 'Danh_muc_namsController');

// Route::resource('danh_muc_hoi_this', 'Danh_muc_hoi_thisController');

// Route::resource('bai_hats', 'Bai_hatsController');

// Route::resource('tac_gia', 'Tac_giaController');

//Route::resource('thanh_phan_tham_gia', 'Thanh_phan_tham_giaController');
