<?php

class Tiet_muc_du_thi extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ms_tiet_muc' => 'required',
		'ten_tiet_muc'=> 'required',
		'trinh_bay'=> 'required',
		'the_loai_tiet_muc'=> 'required',
		'ket_qua'=> 'required',
		'ghi_chu'=> '',
		'VongThis_Id'=> 'required',
		'BaiHats_Id'=> 'required',
		'HinhThucDuThis_Id'=> 'required',
		'PhieuDangKys_Id'=> 'required'
	);
	public function danhsachtietmuc($id_chuong_trinh,$id_hinh_thuc,$id_vong_thi,$id_phieu_dang_ky){

		if($id_phieu_dang_ky == null){
			$results = DB::table('tiet_muc_du_this')
					->leftJoin('hinh_thuc_du_this', 'tiet_muc_du_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
					->join('vong_this', function($join)
			        {
			            $join->on('vong_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
			        		->on('tiet_muc_du_this.VongThis_Id','=','vong_this.id');
			        })
			        ->join('hoi_this', function($join)
			        {
			            $join->on('hinh_thuc_du_this.HoiThis_DanhMucNamsId', '=', 'hoi_this.DanhMucNams_Id')
			        		->on('hinh_thuc_du_this.HoiThis_DanhMucHoiThisId','=' ,'hoi_this.DanhMucHoiThis_Id')
			        		->on('hinh_thuc_du_this.HoiThis_Id', '=', 'hoi_this.id');
			        })
			        ->where('hoi_this.id','=',$id_chuong_trinh)
			        ->where('hinh_thuc_du_this.id','=',$id_hinh_thuc)
			        ->where('vong_this.id','=',$id_vong_thi)
			        ->select('tiet_muc_du_this.ten_tiet_muc','tiet_muc_du_this.trinh_bay','tiet_muc_du_this.id')
			        ->get();
		}
		else{
			$results = DB::table('tiet_muc_du_this')
					->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
			        ->where('tiet_muc_du_this.PhieuDangKys_Id','=',$id_phieu_dang_ky)
			        ->select('tiet_muc_du_this.ten_tiet_muc','tiet_muc_du_this.trinh_bay','tiet_muc_du_this.id')
			        ->get();
			
		}

		return $results;
	}

	public function danhsachtietmucdachamdiem($id_chuong_trinh,$id_hinh_thuc,$id_vong_thi,$id_phieu_dang_ky,$id_bgks){

		if($id_phieu_dang_ky == null){
			$results = DB::table('tiet_muc_du_this')
					->leftJoin('hinh_thuc_du_this', 'tiet_muc_du_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
					->join('vong_this', function($join)
			        {
			            $join->on('vong_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
			        		->on('tiet_muc_du_this.VongThis_Id','=','vong_this.id');
			        })
			        ->join('hoi_this', function($join)
			        {
			            $join->on('hinh_thuc_du_this.HoiThis_DanhMucNamsId', '=', 'hoi_this.DanhMucNams_Id')
			        		->on('hinh_thuc_du_this.HoiThis_DanhMucHoiThisId','=' ,'hoi_this.DanhMucHoiThis_Id')
			        		->on('hinh_thuc_du_this.HoiThis_Id', '=', 'hoi_this.id');
			        })
			        ->leftJoin('cham_diems', 'cham_diems.TietMucDuThis_Id', '=', 'tiet_muc_du_this.id')
			        ->join('thanh_vien_bgks', function($join)
			        {
			            $join->on('thanh_vien_bgks.HoiThis_Id', '=', 'hoi_this.id')
			        		->on('cham_diems.ThanhVienBgks_Id','=','thanh_vien_bgks.id');
			        })
			        ->where('hoi_this.id','=',$id_chuong_trinh)
			        ->where('hinh_thuc_du_this.id','=',$id_hinh_thuc)
			        ->where('vong_this.id','=',$id_vong_thi)
			        ->where('thanh_vien_bgks.TaiKhoans_Id','=',$id_bgks)
			        ->select('tiet_muc_du_this.ten_tiet_muc','tiet_muc_du_this.trinh_bay','tiet_muc_du_this.id','cham_diems.so_diem')
			        ->get();
		}
		else{
			$results = DB::table('tiet_muc_du_this')
					->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
					->leftJoin('cham_diems', 'cham_diems.TietMucDuThis_Id', '=', 'tiet_muc_du_this.id')
					->leftJoin('thanh_vien_bgks', 'cham_diems.ThanhVienBgks_Id', '=', 'thanh_vien_bgks.id')
			        ->where('tiet_muc_du_this.PhieuDangKys_Id','=',$id_phieu_dang_ky)
			        ->where('thanh_vien_bgks.TaiKhoans_Id','=',$id_bgks)
			        ->select('tiet_muc_du_this.ten_tiet_muc','tiet_muc_du_this.trinh_bay','tiet_muc_du_this.id','cham_diems.so_diem')
			        ->get();
		}

		return $results;
	}
}
