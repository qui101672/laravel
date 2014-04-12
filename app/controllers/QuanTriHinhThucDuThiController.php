<?php

class QuanTriHinhThucDuThiController extends BaseController {

	/**
	 * Hinh_thuc_du_thi Repository
	 *
	 * @var Hinh_thuc_du_thi
	 */
	protected $hinh_thuc_du_thi;

	public function __construct(Hinh_thuc_du_thi $hinh_thuc_du_thi)
	{
		$this->hinh_thuc_du_thi = $hinh_thuc_du_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hinh_thuc_du_this = $this->hinh_thuc_du_thi->all();

		return View::make('quantrihinhthucduthi.index', compact('hinh_thuc_du_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantrihinhthucduthi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$input = array(
				'ma_hinh_thuc' => Input::get('ma_hinh_thuc'),
                'ten_hinh_thuc' => Input::get('ten_hinh_thuc'),
                'noi_dung_hinh_thuc' => Input::get('noi_dung_hinh_thuc'),
                'so_luong_yeu_cau' => Input::get('so_luong_yeu_cau'),
                'so_vong_thi' => Input::get('so_vong_thi'),
                'ghi_chu' => Input::get('ghi_chu'),
                'bat_buoc' => Input::get('bat_buoc'),
                'HoiThis_DanhMucNamsId' => Input::get('HoiThis_DanhMucNamsId'),
                'HoiThis_Id' => Input::get('HoiThis_Id'),
                'HoiThis_DanhMucHoiThisId' => Input::get('HoiThis_DanhMucHoiThisId')
			);
		$id = DB::table('hinh_thuc_du_this')->insertGetId($input);
		if(Input::get('so_vong_thi') == '2'){
			DB::table('vong_this')->insert(array(
	    				array('ma_vong_thi' => '1','ten_vong_thi' => 'Vòng Sơ Khảo','HinhThucDuThis_Id' => $id,'ghi_chu' => ''),
	    				array('ma_vong_thi' => '2','ten_vong_thi' => 'Vòng Chung Kết Xếp Hạng','HinhThucDuThis_Id' => $id,'ghi_chu' => '')
	    			));
		}
		if(Input::get('so_vong_thi') == '3'){
			DB::table('vong_this')->insert(array(
	    				array('ma_vong_thi' => '1','ten_vong_thi' => 'Vòng Sơ Khảo','HinhThucDuThis_Id' => $id,'ghi_chu' => ''),
					array('ma_vong_thi' => '2','ten_vong_thi' => 'Vòng Chung Khảo','HinhThucDuThis_Id' => $id,'ghi_chu' => ''),
	    				array('ma_vong_thi' => '3','ten_vong_thi' => 'Vòng Chung Kết Xếp Hạng','HinhThucDuThis_Id' => $id,'ghi_chu' => '')
	    			));
		}

		$output = $this->hinh_thuc_du_thi->find($id);
		return $output;
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hinh_thuc_du_thi = $this->hinh_thuc_du_thi->findOrFail($id);

		return View::make('quantrihinhthucduthi.show', compact('hinh_thuc_du_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hinh_thuc_du_thi = $this->hinh_thuc_du_thi->find($id);

		if (is_null($hinh_thuc_du_thi))
		{
			return Redirect::route('hinh_thuc_du_this.index');
		}

		return View::make('quantrihinhthucduthi.edit', compact('hinh_thuc_du_thi'));
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
		$validation = Validator::make($input, Hinh_thuc_du_thi::$rules);

		if ($validation->passes())
		{
			$hinh_thuc_du_thi = $this->hinh_thuc_du_thi->find($id);
			$hinh_thuc_du_thi->update($input);

			return Redirect::route('hinh_thuc_du_this.show', $id);
		}

		return Redirect::route('hinh_thuc_du_this.edit', $id)
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
		$this->hinh_thuc_du_thi->find($id)->delete();

		return Redirect::route('hinh_thuc_du_this.index');
	}

	public function post_dshinhthuc(){
		$id = Input::get('id_chuong_trinh');
		//lay danh sach hinh thuc cua hoi thi
	 	$hinh_thuc = new Hinh_thuc_du_thi();
	 	$results = $hinh_thuc->get_dshinhthuc($id);
	 	return $results;
	}

}
