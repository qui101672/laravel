<?php

class Phieu_dang_ky extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_phieu_dang_ky' => 'required',
		'trang_thai' => 'required',
		'ghi_chu' => '',
		'TaiKhoans_Id' => 'required',
		'HoiThis_Is' => 'required',
		'Hoi_DanhMucNamsId' => 'required',
		'HoiThis_DanhMucHoiThisId' => 'required'
	);
	
}
