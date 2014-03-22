<?php

class Vong_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_vong_thi' => 'required',
		'ten_vong_thi' => 'required',
		'HinhThucDuThis_Id' => 'required',
		'ghi_chu' => ''
	);
	public function get_vongthi($id){
		$results = DB::table('vong_this')->where('HinhThucDuThis_Id',$id)->first();
		return $results;
	}	
	public function get_dsvongthi($id){
		$results = DB::table('vong_this')->where('HinhThucDuThis_Id','=',$id)->get();
		return $results;
	}
}
