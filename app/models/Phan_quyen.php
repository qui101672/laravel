<?php

class Phan_quyen extends Eloquent {
	protected $guarded = array();
	public static $rules = array(
		'ma_quyen' => 'required',
		'ten_quyen' => 'required',
		'ghi_chu' => ''
	);

    public function getTen_Quyen($TaiKhoans_Id){
    	$ten_quyen = DB::table('phan_quyens')->where('id',$TaiKhoans_Id)->pluck('ten_quyen');
    	return $ten_quyen;
    }
}
