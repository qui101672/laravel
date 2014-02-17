<?php

class The_loai_bai_viet extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_the_loai_bai_viet' => 'required',
		'ten_the_loai_bai_viet' => 'required',
		'ghi_chu' => 'required'
	);
}
