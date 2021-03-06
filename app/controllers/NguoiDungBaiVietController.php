<?php

class NguoiDungBaiVietController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $bai_viet;

	public function __construct(Bai_viet $bai_viet)
	{
		$this->bai_viet = $bai_viet;
	}

	public function index()
	{
        $bai_viet = $this->bai_viet->orderBy('id','desc')->get();

		return View::make('nguoidungbaiviet.index', compact('bai_viet'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bai_viet = DB::table('bai_viets')->where('id','=',$id)->first();

		return View::make('nguoidungbaiviet.show', compact('bai_viet'));
	}

	public function theloai($id){
		
		$bai_viet = DB::table('bai_viets')
				->leftjoin('the_loai_bai_viets','bai_viets.TheLoaiBaiViets_Id','=','the_loai_bai_viets.id')
				->where('the_loai_bai_viets.id','=',$id)
                                ->select('bai_viets.id','bai_viets.TaiKhoans_Id','bai_viets.created_at','bai_viets.noi_dung_bai_viet','bai_viets.tieu_de_bai_viet')
				->get();

		return View::make('nguoidungbaiviet.theloai', compact('bai_viet'));
	}
}
