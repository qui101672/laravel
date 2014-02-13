<?php

class Bai_viet extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_bai_viet' => 'required',
		'ten_bai_viet' => 'required',
		'noi_dung_bai_viet' => 'required',
		'id_nguoi_sua' => 'required',
		'id_ma_the_loai_bv' => 'required',
		'id_nguoi_tao' => 'required',
		'tag' => 'required',
		'ghi_chu' => 'required'
	);
}
