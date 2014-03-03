<?php

class Danh_muc_hoi_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_hoi_thi' => 'required',
		'ten_hoi_thi' => 'required',
		'ghi_chu' => 'required'
	);
}
