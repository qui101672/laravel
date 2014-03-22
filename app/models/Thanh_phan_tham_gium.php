<?php

class Thanh_phan_tham_gium extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'TaiKhoans_Id' => 'required',
		'TietMucDuThis_Id' => 'required',
		'ghi_chu' => 'required'
	);
}
