<?php

class Hoi_thi extends Eloquent {

    protected $table = 'hoi_this';
    protected $guarded = array('ten_chuong_trinh', 'time_start', 'time_end', 'DanhMucNams_Id', 'DanhMucHoiThis_Id', 'ghi_chu');
    public static $rules = array(
        'ten_chuong_trinh' => 'required',
        'time_start' => 'required',
        'time_end' => 'required',
        'DanhMucNams_Id' => 'required',
        'DanhMucHoiThis_Id' => 'required',
        'ghi_chu' => ''
    );

    public function check_hoi_this() {
        $today = date('Y-m-d');
        $query = "SELECT hoi_this.id,hoi_this.DanhMucNams_Id,hoi_this.DanhMucHoiThis_Id,danh_muc_hoi_this.ma_hoi_thi " . "FROM hoi_this INNER JOIN danh_muc_hoi_this ON hoi_this.DanhMucHoiThis_Id = danh_muc_hoi_this.id  " . "WHERE datediff(`time_start` ,'" . $today . "') <= 0 AND datediff(  `time_end` ,'" . $today . "') >=0;";
        $results = DB::select($query);
        return $results;
    }

    public function get_dshoithi_bgk() {

        $results = DB::table('thanh_vien_bgks')
                ->leftJoin('hoi_this', 'thanh_vien_bgks.HoiThis_Id', '=', 'hoi_this.id')
                ->where('thanh_vien_bgks.TaiKhoans_Id', '=', Auth::user()->id)
                ->select('hoi_this.id', 'hoi_this.ten_chuong_trinh')
                ->get();
        return $results;
    }

    public function get_dshoithi() {
        $results = DB::table('hoi_this')->select('id', 'ten_chuong_trinh')->orderBy('id','desc')->get();
        return $results;
    }

    public function get_mahoithi($id) {
        $results = DB::table('phieu_dang_kies')
                ->leftJoin('danh_muc_hoi_this','phieu_dang_kies.HoiThis_DanhMucHoiThisId','=','danh_muc_hoi_this.id')
                ->where('phieu_dang_kies.id','=',$id)
                ->pluck('danh_muc_hoi_this.ma_hoi_thi');
        return $results;
    }
    public function get_tenchuongtrinh($id) {
        $results = DB::table('hoi_this')
                ->where('hoi_this.id','=',$id)
                ->pluck('hoi_this.ten_chuong_trinh');
        return $results;
    }
    
    public function get_dstenchuongtrinh() {
        $results = DB::table('hoi_this')->get();
        return $results;
    }
 
}
