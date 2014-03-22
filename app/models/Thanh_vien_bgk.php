<?php

class Thanh_vien_bgk extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_thanh_vien' => 'required',
		'ho_ten' => 'required',
		'vi_tri' => 'required',
		'ghi_chu' => 'required',
		'HoiThis_Id' => 'required',
		'TaiKhoans_Id' => 'required'
	);
}
