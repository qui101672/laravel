<?php

class Thanh_vien_bgk extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_thanh_vien' => 'required',
		'ho_ten' => 'required',
		'vi_tri' => 'required',
		'ghi_chu' => 'required',
		'HoiThis_Id' => 'required',
		'TaiKhoans_Id' => 'required'
	);
	public get_id_bgk($id_tai_khoan){
		$results = DB::table('thanh_vien_bgks')->where('TaiKhoans_Id','=',$id_tai_khoan)->pluck('id');
		return $results;
	};

}
