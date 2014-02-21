<?php

class Lop extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_lop' => 'required',
		'ten_lop' => 'required',
		'so_luong' => 'required',
		'khoa_hoc' => 'required',
		'Nganhs_Id' => 'required',
		'ghi_chu' => 'required'
	);
}
