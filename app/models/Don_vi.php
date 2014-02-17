<?php

class Don_vi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_don_vi' => 'required',
		'ten_don_vi' => 'required',
		'ghi_chu' => ''
	);
}
