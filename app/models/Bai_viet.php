<?php

class Bai_viet extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id' => 'required',
		'ma_bai_viet' => 'required',
		'tieu_de_bai_viet' => 'required',
		'noi_dung_bai_viet' => 'required',
		'id_nguoi_sua' => '',
		'TheLoaiBaiViets_Id' => 'required',
		'TaiKhoans_Id' => 'required',
		'updated_at' => '',
		'created_at' => 'required',
		'tag' => '',
		'ghi_chu' => ''
	);
}
