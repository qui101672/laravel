<?php

class QuanTriHoiThiController extends BaseController {

	/**
	 * Hoi_thi Repository
	 *
	 * @var Hoi_thi
	 */
	protected $hoi_thi;

	public function __construct(Hoi_thi $hoi_thi)
	{
		$this->hoi_thi = $hoi_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hoi_this = $this->hoi_thi->all();

		return View::make('quantrihoithi.index', compact('hoi_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantrihoithi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Hoi_thi::$rules);

		if ($validation->passes())
		{
			$this->hoi_thi->create($input);

			return Redirect::route('hoi_this.index');
		}

		return Redirect::route('hoi_this.create')
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
		$hoi_thi = $this->hoi_thi->findOrFail($id);

		return View::make('quantrihoithi.show', compact('hoi_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hoi_thi = $this->hoi_thi->find($id);

		if (is_null($hoi_thi))
		{
			return Redirect::route('hoi_this.index');
		}

		return View::make('quantrihoithi.edit', compact('hoi_thi'));
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
		$validation = Validator::make($input, Hoi_thi::$rules);

		if ($validation->passes())
		{
			$hoi_thi = $this->hoi_thi->find($id);
			$hoi_thi->update($input);

			return Redirect::route('hoi_this.show', $id);
		}

		return Redirect::route('hoi_this.edit', $id)
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
		$this->hoi_thi->find($id)->delete();

		return Redirect::route('hoi_this.index');
	}

}
