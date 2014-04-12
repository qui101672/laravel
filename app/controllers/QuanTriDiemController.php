<?php

class QuanTriDiemController extends BaseController {
	public function getIndex()
	{
        return View::make('quantriketqua.quanlydiem');
	}
	public function postDanhsachtietmuc(){
		$id_chuong_trinh = Input::get('id_chuong_trinh');
		$id_hinh_thuc = Input::get('id_hinh_thuc');
		$id_vong_thi = Input::get('id_vong_thi');
		$id_phieu_dang_ky = Input::get('id_phieu_dang_ky');

		$tiet_muc = new Tiet_muc_du_thi();

		$results = $tiet_muc->danhsachtietmuc($id_chuong_trinh,$id_hinh_thuc,$id_vong_thi,$id_phieu_dang_ky);

		return $results;
	}
	public function postDiemtrungbinh(){
		$id_tiet_muc = Input::get('id_tiet_muc'); 
		$results['diemtb'] = DB::table('cham_diems')->where('TietMucDuThis_Id','=',$id_tiet_muc)->avg('so_diem');
		$results['id'] = $id_tiet_muc;
		return $results;
	}
	public function postKetquatietmuc(){
		$ket_qua = Input::get('ket_qua'); 
		$id_tiet_muc = Input::get('id_tiet_muc');
		DB::table('tiet_muc_du_this')
            ->where('id', $id_tiet_muc)
            ->update(array('ket_qua' => $ket_qua));
	}
	
}
