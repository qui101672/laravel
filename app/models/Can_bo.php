<?php

class Can_bo extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mscb' => 'required',
		'ho_ten' => 'required',
		'gioi_tinh' => 'required',
		'ngay_sinh' => 'required',
		'dia_chi' => 'required',
		'que_quan' => 'required',
		'email' => 'required',
		'sdt' => 'required',
		'ghi_chu' => '',
		'DonVis_Id' => 'required',
		'TaiKhoans_Id' => 'required',
		'chuc_vu' => 'required'
	);
}
