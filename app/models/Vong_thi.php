<?php

class Vong_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_vong_thi' => 'required',
		'ten_vong_thi' => 'required',
		'HinhThucDuThis_Id' => 'required',
		'ghi_chu' => 'required'
	);
}
