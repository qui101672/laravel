<?php

class Nganh extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_nganh' => 'required',
		'ten_nganh' => 'required',
		'DonVis_Id' => 'required',
		'ghi_chu' => ''
	);
        
}
