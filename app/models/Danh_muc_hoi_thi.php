<?php

class Danh_muc_hoi_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_hoi_thi' => 'required',
		'ten_hoi_thi' => 'required',
		'ghi_chu' => 'required'
	);
	public function get_mahoithi($id_hoithi){
		$results = DB::table('hoi_this')
					->leftjoin('danh_muc_hoi_this','hoi_this.DanhMucHoiThis_Id' ,'=', 'danh_muc_hoi_this.id')
					->where('hoi_this.id',$id_hoithi)
					->select('danh_muc_hoi_this.ma_hoi_thi','hoi_this.id','hoi_this.DanhMucHoiThis_Id')
					->get();
		return $results;
	}
}
