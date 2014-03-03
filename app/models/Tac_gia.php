<?php

class Tac_gia extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_tac_gia' => 'required',
		'ho_ten' => 'required',
		'ghi_chu' => 'required'
	);
}
