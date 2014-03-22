<?php

class QuanTriPhieuDangKyController extends BaseController {

	/**
	 * Phieu_dang_ky Repository
	 *
	 * @var Phieu_dang_ky
	 */
	protected $phieu_dang_ky;

	public function __construct(Phieu_dang_ky $phieu_dang_ky)
	{
		$this->phieu_dang_ky = $phieu_dang_ky;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hoi_this = DB::table('hoi_this')->orderBy('id', 'desc')->get();

	 	$hoi_this_temp = $hoi_this;

		foreach ($hoi_this_temp as $key => $value) {
			 $key = $value->id;

			 $phieu_dang_kies[$key] = DB::table('tai_khoans')
						        ->leftJoin('phieu_dang_kies', 'phieu_dang_kies.TaiKhoans_Id', '=', 'tai_khoans.id')
						        ->where('HoiThis_Id', $value->id)
						        ->get();
			 

		}
 

		return View::make('quantriphieudangky.index', compact('hoi_this'))->with('phieu_dang_kies',$phieu_dang_kies);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantriphieudangky.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Phieu_dang_ky::$rules);

		if ($validation->passes())
		{
			$this->phieu_dang_ky->create($input);

			return Redirect::route('phieu_dang_kies.index');
		}

		return Redirect::route('phieu_dang_kies.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$phieu_dang_ky = $this->phieu_dang_ky->findOrFail($id);
		 
		 			
		 $tiet_muc = DB::table('tiet_muc_du_this')->select('vong_this.ten_vong_thi','phieu_dang_kies.ma_phieu_dang_ky','tiet_muc_du_this.ms_tiet_muc','tiet_muc_du_this.ten_tiet_muc','tiet_muc_du_this.trinh_bay','tiet_muc_du_this.the_loai_tiet_muc','hinh_thuc_du_this.ten_hinh_thuc','bai_hats.ten_bai_hat','tiet_muc_du_this.id','tiet_muc_du_this.ghi_chu')
		 			->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
		 			->leftJoin('hinh_thuc_du_this', 'tiet_muc_du_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
		 			->leftJoin('bai_hats', 'tiet_muc_du_this.BaiHats_Id', '=', 'bai_hats.id')
		 			->leftJoin('vong_this', 'tiet_muc_du_this.VongThis_Id', '=', 'vong_this.id')
					->where('ma_phieu_dang_ky', $id)->get();
 		 
		return View::make('quantriphieudangky.show', compact(array('phieu_dang_ky','tiet_muc')));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phieu_dang_ky = $this->phieu_dang_ky->find($id);

		if (is_null($phieu_dang_ky))
		{
			return Redirect::route('phieu_dang_kies.index');
		}

		return View::make('quantriphieudangky.edit', compact('phieu_dang_ky'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Phieu_dang_ky::$rules);

		if ($validation->passes())
		{
			$phieu_dang_ky = $this->phieu_dang_ky->find($id);
			$phieu_dang_ky->update($input);

			return Redirect::route('phieu_dang_kies.show', $id);
		}

		return Redirect::route('phieu_dang_kies.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->phieu_dang_ky->find($id)->delete();

		return Redirect::route('phieu_dang_kies.index');
	}

}
