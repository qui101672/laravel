<?php

class Hoi_thi extends Eloquent {
	protected $table = 'hoi_this';
	protected $guarded = array('ten_chuong_trinh','time_start','time_end','DanhMucNams_Id','DanhMucHoiThis_Id','ghi_chu');

	public static $rules = array(
	'ten_chuong_trinh' => 'required',
	'time_start' => 'required',
	'time_end' => 'required',
	'DanhMucNams_Id' => 'required',
	'DanhMucHoiThis_Id' => 'required',
	'ghi_chu' => ''
	);
}