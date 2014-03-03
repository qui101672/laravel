<?php

class Phieu_dang_kiesController extends BaseController {

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
		$phieu_dang_kies = $this->phieu_dang_ky->all();

		return View::make('phieu_dang_kies.index', compact('phieu_dang_kies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('phieu_dang_kies.create');
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

		return View::make('phieu_dang_kies.show', compact('phieu_dang_ky'));
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

		return View::make('phieu_dang_kies.edit', compact('phieu_dang_ky'));
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
