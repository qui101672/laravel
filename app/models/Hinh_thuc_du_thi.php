<?php

class Hinh_thuc_du_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_hinh_thuc' => 'required',
		'ten_hinh_thuc' => 'required',
		'noi_dung_hinh_thuc' => 'required',
		'so_luong_yeu_cau' => 'required',
		'so_vong_thi' => 'required',
		'HoiThis_Id' => 'required',
		'HoiThis_DanhMucsId' => 'required',
		'HoiThis_DanhMucHoiThisId' => 'required',
		'ghi_chu' => ''
	);
}
