<?php

class QuanTriVongThi extends BaseController {

	/**
	 * Vong_thi Repository
	 *
	 * @var Vong_thi
	 */
	protected $vong_thi;

	public function __construct(Vong_thi $vong_thi)
	{
		$this->vong_thi = $vong_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vong_this = $this->vong_thi->all();

		return View::make('vong_this.index', compact('vong_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vong_this.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Vong_thi::$rules);

		if ($validation->passes())
		{
			$this->vong_thi->create($input);

			return Redirect::route('vong_this.index');
		}

		return Redirect::route('vong_this.create')
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
		$vong_thi = $this->vong_thi->findOrFail($id);

		return View::make('vong_this.show', compact('vong_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vong_thi = $this->vong_thi->find($id);

		if (is_null($vong_thi))
		{
			return Redirect::route('vong_this.index');
		}

		return View::make('vong_this.edit', compact('vong_thi'));
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
		$validation = Validator::make($input, Vong_thi::$rules);

		if ($validation->passes())
		{
			$vong_thi = $this->vong_thi->find($id);
			$vong_thi->update($input);

			return Redirect::route('vong_this.show', $id);
		}

		return Redirect::route('vong_this.edit', $id)
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
		$this->vong_thi->find($id)->delete();

		return Redirect::route('vong_this.index');
	}

}
