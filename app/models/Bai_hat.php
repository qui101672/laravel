<?php

class Bai_hat extends Eloquent {
	protected $guarded = array();
	private $model;
	public static $rules = array(
		'ma_bai_hat' => 'required',
		'ten_bai_hat' => 'required',
		'nam_sang_tac' => 'required',
		'ghi_chu' => ''
	);
}
