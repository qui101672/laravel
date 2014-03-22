<?php

class Cham_diem extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id'		=> 'required',
		'so_diem' => 'required',
		'ghi_chu'=> '',
		'ThanhVienBgks_Id'=> 'required',
		'TietMucDuThis_Id'=> 'required'
		);
}
