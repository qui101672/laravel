<?php

class Phan_quyen extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_quyen' => 'required',
		'ten_quyen' => 'required',
		'ghi_chu' => ''
	);
}
