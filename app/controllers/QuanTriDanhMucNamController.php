<?php

class QuanTriDanhMucNamController extends BaseController {

	/**
	 * Danh_muc_nam Repository
	 *
	 * @var Danh_muc_nam
	 */
	protected $danh_muc_nam;

	public function __construct(Danh_muc_nam $danh_muc_nam)
	{
		$this->danh_muc_nam = $danh_muc_nam;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$danh_muc_nams = $this->danh_muc_nam->all();

		return View::make('quantridanhmucnam.index', compact('danh_muc_nams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantridanhmucnam.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Danh_muc_nam::$rules);

		if ($validation->passes())
		{
			$this->danh_muc_nam->create($input);

			return Redirect::route('danh_muc_nams.index');
		}

		return Redirect::route('danh_muc_nams.create')
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
		$danh_muc_nam = $this->danh_muc_nam->findOrFail($id);

		return View::make('quantridanhmucnam.show', compact('danh_muc_nam'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$danh_muc_nam = $this->danh_muc_nam->find($id);

		if (is_null($danh_muc_nam))
		{
			return Redirect::route('danh_muc_nams.index');
		}

		return View::make('quantridanhmucnam.edit', compact('danh_muc_nam'));
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
		$validation = Validator::make($input, Danh_muc_nam::$rules);

		if ($validation->passes())
		{
			$danh_muc_nam = $this->danh_muc_nam->find($id);
			$danh_muc_nam->update($input);

			return Redirect::route('danh_muc_nams.show', $id);
		}

		return Redirect::route('danh_muc_nams.edit', $id)
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
		$this->danh_muc_nam->find($id)->delete();

		return Redirect::route('danh_muc_nams.index');
	}

}
