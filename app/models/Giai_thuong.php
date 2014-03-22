<?php

class Giai_thuong extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id'  => 'required',
		'ma_giai_thuong' => 'required',
		'ten_giai_thuong' => 'required',
		'so_luong' => 'required',
		'so_tien' => 'required',
		'ghi_chu' => '',
		'HinhThucDuThis_Id' => 'required'

		);
}
