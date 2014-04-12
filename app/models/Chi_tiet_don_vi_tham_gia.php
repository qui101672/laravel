<?php

class Chi_tiet_don_vi_tham_gia extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id'=> 'required',
		'truong_doan'=> 'required',
		'pho_doan'=> 'required',
		'diem_cong'=> 'required',
		'diem_tru'=> 'required',
		'giai_toan_doan'=> 'required',
		'ghi_chu'=> '',
		'PhieuDangKys_Id'=> 'required',
		'DonVis_Id'=> 'required'
		);
	 
}
