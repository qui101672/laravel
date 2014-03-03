<?php

class Hinh_thuc_du_thi extends Eloquent {
	protected $table = 'hinh_thuc_du_this';
	protected $guarded = array('ma_hinh_thuc','ten_hinh_thuc','noi_dung_hinh_thuc','so_luong_yeu_cau','so_vong_thi',
		'HoiThis_Id','HoiThis_DanhMucNamsId','HoiThis_DanhMucHoiThisId','ghi_chu');

	public static $rules = array(
		'ma_hinh_thuc' => 'required',
		'ten_hinh_thuc' => 'required',
		'noi_dung_hinh_thuc' => 'required',
		'so_luong_yeu_cau' => 'required',
		'so_vong_thi' => 'required',
		'HoiThis_Id' => 'required',
		'HoiThis_DanhMucNamsId' => 'required',
		'HoiThis_DanhMucHoiThisId' => 'required',
		'ghi_chu' => ''
	);
}
