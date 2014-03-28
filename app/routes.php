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
    //Người dùng đăng nhập
    Route::post('login', array('before' => 'csrf', 'uses' => 'NguoiDungTaiKhoanController@login'));
    Route::get('login', array('as' => 'login', function () { 
        return View::make('nguoidungtaikhoan.login');
    }));
    
});

Route::get('tin_tuc/theloai/{id}', array('as' => 'tin_tuc.theloai', 'uses'=>'NguoiDungBaiVietController@theloai'))
            ->where(array('id' => '[0-9]+'));

Route::group(array('before' => 'auth'), function()
{
        //Đăng Xuất
        Route::get('logout', array('uses' => 'QuanTriTaiKhoanController@logout'));
        //Thông Tin Người Dùng
        Route::get('profile', array('uses' => 'NguoiDungTaiKhoanController@profile'));
        //Tài Khoản Người Dùng
        Route::resource('thong_tin','NguoiDungTaiKhoanController');
        //Người Dùng Đăng Ký Phiếu
        Route::resource('dang_ky_phieus', 'NguoiDungPhieuDangKyController');
        //Người Dùng Đăng Ký Tiết Mục
        Route::resource('dang_ky_tiet_mucs', 'NguoiDungPhieuDangKyController');

    if(Session::get('role') == 'admin'){
    	//Admin quản lý bài viết
        Route::resource('bai_viet','QuanTriBaiVietController');
        //Admin quản lý đơn vị
        Route::resource('don_vi','QuanTriDonViController');
        //Admin quản lý lớp
        Route::resource('lop', 'QuanTriLopController');
        //Admin quản lý ngành
        Route::resource('nganh', 'QuanTriNganhController');
        //Admin quản lý the loai bai viet
        Route::resource('the_loai_bai_viet', 'QuanTriTheLoaiBaiHatController');
        //Admin quản lý tài khoản
        Route::resource('tai_khoan','QuanTriTaiKhoanController');
        //Admin quản lý hội thi
        Route::resource('hoi_this', 'QuanTriHoiThiController');
        //Admin quản lý hình thức dự thi
        Route::resource('hinh_thuc_du_this', 'QuanTriHinhThucDuThiController');
            //Ajax post hình thức dự thi
            Route::post('post_dshinhthuc',array('uses'=>'QuanTriHinhThucDuThiController@post_dshinhthuc'));
        //Admin quản lý vòng thi
        Route::resource('vong_this', 'QuanTriVongThiController');
            //Ajax post vòng thi dự thi
            Route::post('post_dsvongthi',array('uses'=>'QuanTriVongThiController@post_dsvongthi'));
        //Admin quản lý thành viên ban giám khảo
        Route::resource('ban_giam_khaos', 'QuanTriBGKController');
        //Admin quản lý ban tổ chức
        Route::resource('ban_to_chuc', 'QuanTriBTCController');
        //Admin Quản lý phiếu đăng ký
        Route::resource('phieu_dang_kies', 'QuanTriPhieuDangKyController');
        //Admin đăng ký tiết mục dự thi
        Route::resource('tiet_muc_du_this', 'QuanTriTietMucController');

        Route::resource('chamdiem','QuanTriKetQuaController');

        Route::get('dstietmucdachamdiem', array('uses'=>'QuanTriKetQuaController@dstietmucdachamdiem'));

        Route::post('dstietmucdachamdiem', array('uses'=>'QuanTriKetQuaController@tietmuc_da_cham_diem'));

        Route::get('quanlydiem', array('uses'=>'QuanTriKetQuaController@quanlydiem'));

        Route::post('ds_tietmuc', array('uses'=>'QuanTriKetQuaController@ds_tietmuc'));

        Route::post('ds_tietmuc_cham_diem', array('uses'=>'QuanTriKetQuaController@ds_tietmuc_cham_diem'));

        Route::post('ds_dvthamgia', array('uses'=>'QuanTriKetQuaController@danhsachdonvithamgia'));
        
        Route::resource('danh_muc_hoi_this', 'Danh_muc_hoi_thisController');

        Route::post('kiemtramahoithi', array('uses'=>'Danh_muc_hoi_thisController@get_mahoithi'));

    } elseif(Session::get('role') == 'sinhvien'){

    } elseif(Session::get('role') == 'canbo'){

    } elseif(Session::get('role') == 'quanly'){

    } elseif(Session::get('role') == 'thuky'){

    } elseif(Session::get('role') == 'bantochuc'){

    } elseif(Session::get('role') == 'bangiamkhao'){

        //Ajax post hình thức dự thi
        Route::post('post_dshinhthuc',array('uses'=>'QuanTriHinhThucDuThiController@post_dshinhthuc'));
     
        //Ajax post vòng thi dự thi
        Route::post('post_dsvongthi',array('uses'=>'QuanTriVongThiController@post_dsvongthi'));
         
        Route::resource('chamdiem','QuanTriKetQuaController');

        Route::get('dstietmucdachamdiem', array('uses'=>'QuanTriKetQuaController@dstietmucdachamdiem'));

        Route::post('dstietmucdachamdiem', array('uses'=>'QuanTriKetQuaController@tietmuc_da_cham_diem'));

        Route::get('quanlydiem', array('uses'=>'QuanTriKetQuaController@quanlydiem'));

        Route::post('ds_tietmuc', array('uses'=>'QuanTriKetQuaController@ds_tietmuc'));

        Route::post('ds_tietmuc_cham_diem', array('uses'=>'QuanTriKetQuaController@ds_tietmuc_cham_diem'));

        Route::post('ds_dvthamgia', array('uses'=>'QuanTriKetQuaController@danhsachdonvithamgia'));
        
        Route::resource('danh_muc_hoi_this', 'Danh_muc_hoi_thisController');

        Route::post('kiemtramahoithi', array('uses'=>'Danh_muc_hoi_thisController@get_mahoithi'));
            
    }
});

// Route::resource('danh_muc_nams', 'Danh_muc_namsController');

// Route::resource('danh_muc_hoi_this', 'Danh_muc_hoi_thisController');

// Route::resource('bai_hats', 'Bai_hatsController');

// Route::resource('tac_gia', 'Tac_giaController');

//Route::resource('thanh_phan_tham_gia', 'Thanh_phan_tham_giaController');
