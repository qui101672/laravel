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
		$bai_viet = $this->bai_viet->findOrFail($id);

		return View::make('nguoidungbaiviet.show', compact('bai_viet'));
	}


}
