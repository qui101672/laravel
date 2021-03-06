<?php

class Sinh_vien extends Eloquent {
	protected $guarded = array();
	protected $table = 'sinh_viens';
	public static $rules = array(
		'mssv' => 'required',
		'ho_ten' => 'required',
		'gioi_tinh' => 'required',
		'ngay_sinh' => 'required',
		'dia_chi' => 'required',
		'que_quan' => 'required',
		'email' => 'required',
		'sdt' => 'required',
		'ghi_chu' => '',
		'Lops_Id' => 'required',
		'TaiKhoans_Id' => 'required'
	);
}
