<?php

class Hoi_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ten_chuong_trinh' => 'required',
		'time_start' => 'required',
		'time_end' => 'required',
		'ghi_chu' => '',
		'DanhMucHoiThis_Id' => 'required',
		'DanhMucNams_Id' => 'required'
	);
}
