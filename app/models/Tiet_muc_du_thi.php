<?php

class Tiet_muc_du_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ms_tiet_muc' => 'required',
		'ten_tiet_muc'=> 'required',
		'trinh_bay'=> 'required',
		'the_loai_tiet_muc'=> 'required',
		'ket_qua'=> 'required',
		'ghi_chu'=> '',
		'VongThis_Id'=> 'required',
		'BaiHats_Id'=> 'required',
		'HinhThucDuThis_Id'=> 'required',
		'PhieuDangKys_Id'=> 'required'
	);
}
