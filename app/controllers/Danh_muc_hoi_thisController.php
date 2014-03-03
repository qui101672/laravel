<?php

class Danh_muc_hoi_thisController extends BaseController {

	/**
	 * Danh_muc_hoi_thi Repository
	 *
	 * @var Danh_muc_hoi_thi
	 */
	protected $danh_muc_hoi_thi;

	public function __construct(Danh_muc_hoi_thi $danh_muc_hoi_thi)
	{
		$this->danh_muc_hoi_thi = $danh_muc_hoi_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$danh_muc_hoi_this = $this->danh_muc_hoi_thi->all();

		return View::make('danh_muc_hoi_this.index', compact('danh_muc_hoi_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('danh_muc_hoi_this.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Danh_muc_hoi_thi::$rules);

		if ($validation->passes())
		{
			$this->danh_muc_hoi_thi->create($input);

			return Redirect::route('danh_muc_hoi_this.index');
		}

		return Redirect::route('danh_muc_hoi_this.create')
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
		$danh_muc_hoi_thi = $this->danh_muc_hoi_thi->findOrFail($id);

		return View::make('danh_muc_hoi_this.show', compact('danh_muc_hoi_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$danh_muc_hoi_thi = $this->danh_muc_hoi_thi->find($id);

		if (is_null($danh_muc_hoi_thi))
		{
			return Redirect::route('danh_muc_hoi_this.index');
		}

		return View::make('danh_muc_hoi_this.edit', compact('danh_muc_hoi_thi'));
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
		$validation = Validator::make($input, Danh_muc_hoi_thi::$rules);

		if ($validation->passes())
		{
			$danh_muc_hoi_thi = $this->danh_muc_hoi_thi->find($id);
			$danh_muc_hoi_thi->update($input);

			return Redirect::route('danh_muc_hoi_this.show', $id);
		}

		return Redirect::route('danh_muc_hoi_this.edit', $id)
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
		$this->danh_muc_hoi_thi->find($id)->delete();

		return Redirect::route('danh_muc_hoi_this.index');
	}

}
