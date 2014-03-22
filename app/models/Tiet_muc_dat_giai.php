<?php

class Tiet_muc_dat_giai extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'TietMucDuThis_Id' => 'required',
		'GiaiThuongs_Id'=> 'required'

		);
}
