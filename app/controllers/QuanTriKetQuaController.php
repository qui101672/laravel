<?php

class QuanTriKetQuaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $cham_diem;
	public function index()
	{
        return View::make('quantriketqua.index');
	}

	public function quanlydiem()
	{
        return View::make('quantriketqua.quanlydiem');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('quantriketqua.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$TietMucDuThis_ID = Input::get('id_tiet_muc');
		$so_diem = Input::get('so_diem');
		$id_tai_khoan = Auth::user()->id;
		$bgks = new Thanh_vien_bgks();
		$ThanhVienBgks_Id = $bgks->get_id_bgk($id_tai_khoan);

		$id = DB::table('cham_diems')->insertGetId( array('so_diem' => $so_diem, 'TietMucDuThis_ID' => $TietMucDuThis_ID,'ThanhVienBgks_Id'=>$ThanhVienBgks_Id));

		return $id;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function dstietmucdachamdiem()
	{
        
        return View::make('quantriketqua.dstietmucdachamdiem');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('quantriketqua.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

 
	public function ds_tietmuc_cham_diem()
	{
 
		$id_chuong_trinh = Input::get('id_chuong_trinh');
		$id_hinh_thuc = Input::get('id_hinh_thuc');
		$id_vong_thi = Input::get('id_vong_thi');
		$id_phieu_dang_ky = Input::get('id_phieu_dang_ky');

		$tiet_muc = new Tiet_muc_du_thi();
		$results = $tiet_muc->danhsachtietmuc($id_chuong_trinh,$id_hinh_thuc,$id_vong_thi,$id_phieu_dang_ky);

		return $results;
	}

	public function danhsachdonvithamgia()
	{
		$results = DB::table('Chi_tiet_don_vi_tham_gias')
					->leftJoin('don_vis','chi_tiet_don_vi_tham_gias.DonVis_Id', '=' ,'don_vis.id')
					->select('don_vis.ten_don_vi','chi_tiet_don_vi_tham_gias.PhieuDangKys_Id')
					->get();
		return $results;
	}

	public function tietmuc_da_cham_diem()	{
 
		$id_chuong_trinh = Input::get('id_chuong_trinh');
		$id_hinh_thuc = Input::get('id_hinh_thuc');
		$id_vong_thi = Input::get('id_vong_thi');
		$id_phieu_dang_ky = Input::get('id_phieu_dang_ky');
		$id_bgks = Auth::user()->id;

		$tiet_muc = new Tiet_muc_du_thi();
		$results = $tiet_muc->danhsachtietmucdachamdiem($id_chuong_trinh,$id_hinh_thuc,$id_vong_thi,$id_phieu_dang_ky,$id_bgks);

		return $results;
	}

}
