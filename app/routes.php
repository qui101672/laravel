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

Route::group(array('before' => 'guest'), function() {
    //Người dùng đăng nhập
    Route::post('login', array('before' => 'csrf', 'uses' => 'NguoiDungTaiKhoanController@login'));
    Route::get('login', array('as' => 'login', function () {
    return View::make('nguoidungtaikhoan.login');
}));
    Route::post('ad', array('uses'=>'NguoiDungTaiKhoanController@store','as'=>'ad'));
    
});

Route::get('tin_tuc/theloai/{id}', array('as' => 'tin_tuc.theloai', 'uses' => 'NguoiDungBaiVietController@theloai'))
        ->where(array('id' => '[0-9]+'));

Route::group(array('before' => 'auth'), function() {
    //Đăng Xuất
    Route::get('logout', array('uses' => 'QuanTriTaiKhoanController@logout'));
    //Thông Tin Người Dùng
    Route::get('profile', array('uses' => 'NguoiDungTaiKhoanController@profile','as'=>'profile'));
    //Tài Khoản Người Dùng
    Route::resource('thong_tin', 'NguoiDungTaiKhoanController');
    //Người Dùng Đăng Ký Phiếu
    Route::controller('tracuu', 'TraCuuController');
    if (Session::get('role') == 'admin') {
        //Admin quản lý danh mục hội thi 
        Route::resource('danh_muc_hoi_thi', 'QuanTriDanhMucHoiThiController');
        //Admin quản lý danh mục năm 
        Route::resource('danh_muc_nams', 'QuanTriDanhMucNamController');
        //Admin quản lý bài viết
        Route::resource('bai_viet', 'QuanTriBaiVietController');
        //Admin quản lý đơn vị
        Route::resource('don_vi', 'QuanTriDonViController');
        //Admin quản lý lớp
        Route::resource('lop', 'QuanTriLopController');
        //Admin quản lý ngành
        Route::resource('nganh', 'QuanTriNganhController');
        //Admin quản lý the loai bai viet
        Route::resource('the_loai_bai_viet', 'QuanTriTheLoaiBaiHatController');
        //Admin quản lý tài khoản
        Route::resource('tai_khoan', 'QuanTriTaiKhoanController');
        //Admin quản lý hội thi
        Route::resource('hoi_this', 'QuanTriHoiThiController');
        //Admin quản lý hình thức dự thi
        Route::resource('hinh_thuc_du_this', 'QuanTriHinhThucDuThiController');
        //Ajax post hình thức dự thi
        Route::post('post_dshinhthuc', array('uses' => 'QuanTriHinhThucDuThiController@post_dshinhthuc'));
        //Admin quản lý vòng thi
        Route::resource('vong_this', 'QuanTriVongThiController');
        //Ajax post vòng thi dự thi
        Route::post('post_dsvongthi', array('uses' => 'QuanTriVongThiController@post_dsvongthi'));
        //Admin quản lý thành viên ban giám khảo
        Route::resource('ban_giam_khaos', 'QuanTriBGKController');
        //Admin quản lý ban tổ chức
        Route::resource('ban_to_chuc', 'QuanTriBTCController');
        //Admin quản lý kho bài hát
        Route::resource('bai_hats', 'QuanTriBaiHatController');
        Route::resource('tac_gias', 'QuanTriTacGiaController');
        //Admin quản lý giải thưởng
        Route::controller('giaithuongs', 'QuantrigiaithuongController');

        Route::post('kiemtramahoithi', array('uses' => 'QuanTriDanhMucHoiThiController@get_mahoithi'));
    } elseif (Session::get('role') == 'sinhvien') {

        Route::resource('dang_ky_phieus', 'NguoiDungPhieuDangKyController');
        Route::get('dang_ky_phieus/dangkytietmucvong/{mp}/{mh}/{mv}', array('uses' => 'NguoiDungPhieuDangKyController@dangkytietmucvong', 'as' => 'dang_ky_phieus.dangkytietmucvong'))
                ->where(array('mp' => '[0-9]+', 'mh' => '[0-9]+', 'mv' => '[0-9]+'));
        Route::post('dang_ky_phieus/store_tietmuc', array('uses' => 'NguoiDungPhieuDangKyController@store_tietmuc', 'as' => 'dang_ky_phieus.store_tietmuc'));
        //Người dùng đạt giải
        Route::controller('nguoidungdatgiai', 'NguoiDungGiaiThuongController');

    } elseif (Session::get('role') == 'canbo') {

        Route::resource('dang_ky_phieus', 'NguoiDungPhieuDangKyController');
        Route::get('dang_ky_phieus/dangkytietmucvong/{mp}/{mh}/{mv}', array('uses' => 'NguoiDungPhieuDangKyController@dangkytietmucvong', 'as' => 'dang_ky_phieus.dangkytietmucvong'))
                ->where(array('mp' => '[0-9]+', 'mh' => '[0-9]+', 'mv' => '[0-9]+'));
        Route::post('dang_ky_phieus/store_tietmuc', array('uses' => 'NguoiDungPhieuDangKyController@store_tietmuc', 'as' => 'dang_ky_phieus.store_tietmuc'));
        //Người dùng đạt giải
        Route::controller('nguoidungdatgiai', 'NguoiDungGiaiThuongController');

    } elseif (Session::get('role') == 'quanly') {
        //Quản Lý Tiết Mục
        Route::resource('tiet_muc_du_this', 'QuanTriTietMucController');
        //Quản lý bài viết
        Route::resource('bai_viet', 'QuanTriBaiVietController');
        // Quản lý phiếu đăng ký
        Route::resource('phieu_dang_kies', 'QuanTriPhieuDangKyController');
        Route::post('trangthaiphieu', array('uses' => 'QuanTriPhieuDangKyController@trangthaiphieu', 'as' => 'trangthaiphieu'));
        //Quản Lý điểm
        Route::controller('quanlydiem', 'QuanTriDiemController');
        //Ajax post danh sách tiết mục
        Route::post('ds_tietmuc', array('uses' => 'QuanTriKetQuaController@ds_tietmuc'));
        //Ajax post hình thức dự thi
        Route::post('post_dshinhthuc', array('uses' => 'QuanTriHinhThucDuThiController@post_dshinhthuc'));
        //Ajax post vòng thi dự thi
        Route::post('post_dsvongthi', array('uses' => 'QuanTriVongThiController@post_dsvongthi'));
        //Ajax post danh sách tiết mục đã chấm
        Route::post('ds_tietmuc_cham_diem', array('uses' => 'QuanTriKetQuaController@ds_tietmuc_cham_diem'));
        //Ajax post đơn vị tham gia
        Route::post('ds_dvthamgia', array('uses' => 'QuanTriKetQuaController@danhsachdonvithamgia'));
        //Ajax post kiểm tra hội thi
        Route::post('kiemtramahoithi', array('uses' => 'QuanTriDanhMucHoiThiController@get_mahoithi'));
        //Quản lý trao giải thưởn cho tiết mục
        Route::controller('traogiaitietmuc', 'QuanTriTraoGiaiController');
    } elseif (Session::get('role') == 'bantochuc') {
        //BTC Quản lý bài viết
        Route::resource('bai_viet', 'QuanTriBaiVietController');
        //BTC Quản lý phiếu đăng ký
        Route::resource('phieu_dang_kies', 'QuanTriPhieuDangKyController');
        Route::post('trangthaiphieu', array('uses' => 'QuanTriPhieuDangKyController@trangthaiphieu', 'as' => 'trangthaiphieu'));
        //BTC Quản Lý điểm
        Route::controller('quanlydiem', 'QuanTriDiemController');
        //Ajax post danh sách tiết mục
        Route::post('ds_tietmuc', array('uses' => 'QuanTriKetQuaController@ds_tietmuc'));
        //Ajax post hình thức dự thi
        Route::post('post_dshinhthuc', array('uses' => 'QuanTriHinhThucDuThiController@post_dshinhthuc'));
        //Ajax post vòng thi dự thi
        Route::post('post_dsvongthi', array('uses' => 'QuanTriVongThiController@post_dsvongthi'));
        //Ajax post danh sách tiết mục đã chấm
        Route::post('ds_tietmuc_cham_diem', array('uses' => 'QuanTriKetQuaController@ds_tietmuc_cham_diem'));
        //Ajax post đơn vị tham gia
        Route::post('ds_dvthamgia', array('uses' => 'QuanTriKetQuaController@danhsachdonvithamgia'));
        //Ajax post kiểm tra hội thi
        Route::post('kiemtramahoithi', array('uses' => 'QuanTriDanhMucHoiThiController@get_mahoithi'));
        //BTC QuảnLý trao giải thưởn cho tiết mục
        Route::controller('traogiaitietmuc', 'QuanTriTraoGiaiController');
    } elseif (Session::get('role') == 'bangiamkhao') {

        //Ajax post hình thức dự thi
        Route::post('post_dshinhthuc', array('uses' => 'QuanTriHinhThucDuThiController@post_dshinhthuc'));

        //Ajax post vòng thi dự thi
        Route::post('post_dsvongthi', array('uses' => 'QuanTriVongThiController@post_dsvongthi'));

        Route::resource('chamdiem', 'QuanTriKetQuaController');

        Route::get('dstietmucdachamdiem', array('uses' => 'QuanTriKetQuaController@dstietmucdachamdiem'));

        Route::post('dstietmucdachamdiem', array('uses' => 'QuanTriKetQuaController@tietmuc_da_cham_diem'));

        Route::post('suadiem', array('uses' => 'QuanTriKetQuaController@suadiem'));

        Route::post('ds_tietmuc', array('uses' => 'QuanTriKetQuaController@ds_tietmuc'));

        Route::post('ds_tietmuc_cham_diem', array('uses' => 'QuanTriKetQuaController@ds_tietmuc_cham_diem'));

        Route::post('ds_dvthamgia', array('uses' => 'QuanTriKetQuaController@danhsachdonvithamgia'));

        Route::post('kiemtramahoithi', array('uses' => 'QuanTriDanhMucHoiThiController@get_mahoithi'));
    }
});





//Route::resource('thanh_phan_tham_gia', 'Thanh_phan_tham_giaController');


