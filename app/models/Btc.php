<?php

class Btc extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'TaiKhoans_Id' => 'required',
		'ghi_chu' => ''
	);
        public function get_dsbtc(){
            $results = DB::table("to_chuc_hoi_thi")
                    ->leftJoin('hoi_this','to_chuc_hoi_thi.HoiThis_Id', '=', 'hoi_this.id')
                    ->leftJoin('btcs','to_chuc_hoi_thi.Btcs_Id', '=', 'btcs.id')
                    ->leftJoin('tai_khoans','btcs.TaiKhoans_Id', '=', 'tai_khoans.id')
                    ->leftJoin('can_bos','can_bos.TaiKhoans_Id', '=', 'tai_khoans.id')
                    ->select('hoi_this.ten_chuong_trinh','can_bos.ho_ten','to_chuc_hoi_thi.vi_tri_btcs','btcs.id')
                    ->get();
            return $results;
        }
}
