<?php

class Giai_thuong extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_giai_thuong' => 'required',
		'ten_gai_thuong' => 'required',
		'so_luong' => 'required',
		'so_tien' => 'required',
		'ghi_chu' => '',
		'HinhThucDuThis_Id' => 'required'
	);
}
