<?php

class Danh_muc_nam extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nam' => 'required',
		'ghi_chu' => ''
	);
}
