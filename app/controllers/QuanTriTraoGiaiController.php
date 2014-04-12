<?php

class QuanTriTraoGiaiController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex() {
        return View::make('quantritraogiai.index');
    }

    public function postDstietmuctietmuc() {
        $id_hinh_thuc = Input::get('id_hinh_thuc');
        $id_chuong_trinh = Input::get('id_chuong_trinh');
        
        $results = DB::table('tiet_muc_du_this')
                    ->leftJoin('hinh_thuc_du_this', 'tiet_muc_du_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
                    ->join('vong_this', function($join) {
                        $join->on('vong_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
                        ->on('tiet_muc_du_this.VongThis_Id', '=', 'vong_this.id');
                    })
                    ->join('hoi_this', function($join) {
                        $join->on('hinh_thuc_du_this.HoiThis_DanhMucNamsId', '=', 'hoi_this.DanhMucNams_Id')
                        ->on('hinh_thuc_du_this.HoiThis_DanhMucHoiThisId', '=', 'hoi_this.DanhMucHoiThis_Id')
                        ->on('hinh_thuc_du_this.HoiThis_Id', '=', 'hoi_this.id');
                    })
                    ->where('hoi_this.id', '=', $id_chuong_trinh)
                    ->where('hinh_thuc_du_this.id', '=', $id_hinh_thuc)
                    ->where('vong_this.ten_vong_thi', 'Vòng Chung Kết Xếp Hạng')
                    ->select('tiet_muc_du_this.ten_tiet_muc', 'tiet_muc_du_this.trinh_bay', 'tiet_muc_du_this.id','tiet_muc_du_this.ket_qua')
                    ->get();
        return $results;
    }

}
