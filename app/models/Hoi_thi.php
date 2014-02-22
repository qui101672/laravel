<?php

class Hoi_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ten_chuong_trinh' => 'required',
		'time_start' => 'required',
		'time_end' => 'required',
		'DanhMucNams_Id' => 'required',
		'DanhMucHoiThis_Id' => 'required',
		'ghi_chu' => ''
	);
}
