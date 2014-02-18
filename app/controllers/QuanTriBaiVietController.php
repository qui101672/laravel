<?php

class QuanTriBaiVietController extends BaseController {

	/**
	 * Bai_viet Repository
	 *
	 * @var Bai_viet
	 */
	protected $bai_viet;

	public function __construct(Bai_viet $bai_viet)
	{
		$this->bai_viet = $bai_viet;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bai_viet = $this->bai_viet->orderBy('id','desc')->get();

		return View::make('quantribaiviet.index', compact('bai_viet'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantribaiviet.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array(
			'ma_bai_viet' => Input::get('ma_bai_viet'),
			'tieu_de_bai_viet' => Input::get('tieu_de_bai_viet'),
			'noi_dung_bai_viet' => Input::get('noi_dung_bai_viet'),
			'id_nguoi_sua' => '',
			'TheLoaiBaiViets_Id' => Input::get('TheLoaiBaiViets_Id'),
			'TaiKhoans_Id' => Auth::user()->id,
			'updated_at' => Input::get('updated_at'),
			'created_at' => Input::get('created_at'),
			'tag' => Input::get('tag'),
			'ghi_chu' => Input::get('ghi_chu')
			);
		$validation = Validator::make($input, Bai_viet::$rules);

		if ($validation->passes())
		{
			$this->bai_viet->create($input);

			return Redirect::route('bai_viet.index');
		}

		return Redirect::route('bai_viet.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

 
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bai_viet = $this->bai_viet->find($id);

		if (is_null($bai_viet))
		{
			return Redirect::route('bai_viet.index');
		}

		return View::make('quantribaiviet.edit', compact('bai_viet'));
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
		$validation = Validator::make($input, Bai_viet::$rules);
		if ($validation->passes())
		{
			$bai_viet = $this->bai_viet->find($id);
			$bai_viet->update($input);

			return Redirect::route('quantribaiviet.show', $id);
		}

		return Redirect::route('quantribaiviet.edit', $id)
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
		$this->bai_viet->find($id)->delete();

		return Redirect::route('bai_viet.index');
	}



}
