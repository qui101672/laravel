<?php

class Btc extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'TaiKhoans_Id' => 'required',
		'ghi_chu' => ''
	);
}
