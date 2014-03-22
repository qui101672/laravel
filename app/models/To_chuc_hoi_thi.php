<?php

class To_chuc_hoi_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'Btcs_Id' => 'required',
		'HoiThis_Id'=> 'required'
	);
}
