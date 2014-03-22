<?php

class Bai_viet extends Eloquent {
	protected $guarded = array();
	public $timestamps = true;
	public static $rules = array(
		'ma_bai_viet' => 'required',
		'tieu_de_bai_viet' => 'required',
		'noi_dung_bai_viet' => 'required',
		'id_nguoi_sua' => '',
		'TheLoaiBaiViets_Id' => 'required',
		'TaiKhoans_Id' => '',
		'tag' => '',
		'ghi_chu' => ''
	);

}

