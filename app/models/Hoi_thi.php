<?php

class Hoi_thi extends Eloquent {
	protected $table = 'hoi_this';
	protected $guarded = array('ten_chuong_trinh','time_start','time_end','DanhMucNams_Id','DanhMucHoiThis_Id','ghi_chu');

	public static $rules = array(
	'ten_chuong_trinh' => 'required',
	'time_start' => 'required',
	'time_end' => 'required',
	'DanhMucNams_Id' => 'required',
	'DanhMucHoiThis_Id' => 'required',
	'ghi_chu' => ''
	);
	public function check_hoi_this(){
		$today = date('Y-m-d');
		$query = "SELECT hoi_this.id,danh_muc_hoi_this.ma_hoi_thi FROM hoi_this INNER JOIN danh_muc_hoi_this ON hoi_this.DanhMucHoiThis_Id = danh_muc_hoi_this.id  WHERE datediff(`time_start` ,'".$today."') <= 0 AND datediff(  `time_end` ,'".$today."') >=0;";
		$results = DB::select($query);
		return $results;
	}
	public function get_dshoithi(){
		$results = DB::table('hoi_this')->get();
		return $results;
	}
	// public function check_loai_ht($id){
	// 	$hoi_thi = DB::table('hoi_this')->where('id','=',$id)->get();
	// 	foreach ($hoi_thi as $hoi_thi) {
	// 		$danh_muc_hoi_thi = $hoi_thi->DanhMucHoiThis_Id;
	// 	}
	// 	$danh_muc = DB::table('danh_muc_hoi_this')->where('id','=',$danh_muc_hoi_thi)->get();
	// 	foreach ($danh_muc as $danh_muc) {
	// 		$results = $hoi_thi->ma_hoi_thi;
	// 	}
	// 	return $results;
	// }
}