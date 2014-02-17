<?php

class Sinh_viensController extends BaseController {

	/**
	 * Sinh_vien Repository
	 *
	 * @var Sinh_vien
	 */
	protected $sinh_vien;

	public function __construct(Sinh_vien $sinh_vien)
	{
		$this->sinh_vien = $sinh_vien;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sinh_viens = $this->sinh_vien->all();

		return View::make('sinh_viens.index', compact('sinh_viens'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sinh_viens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Sinh_vien::$rules);

		if ($validation->passes())
		{
			$this->sinh_vien->create($input);

			return Redirect::route('sinh_viens.index');
		}

		return Redirect::route('sinh_viens.create')
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
		$sinh_vien = $this->sinh_vien->findOrFail($id);

		return View::make('sinh_viens.show', compact('sinh_vien'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sinh_vien = $this->sinh_vien->find($id);

		if (is_null($sinh_vien))
		{
			return Redirect::route('sinh_viens.index');
		}

		return View::make('sinh_viens.edit', compact('sinh_vien'));
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
		$validation = Validator::make($input, Sinh_vien::$rules);

		if ($validation->passes())
		{
			$sinh_vien = $this->sinh_vien->find($id);
			$sinh_vien->update($input);

			return Redirect::route('sinh_viens.show', $id);
		}

		return Redirect::route('sinh_viens.edit', $id)
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
		$this->sinh_vien->find($id)->delete();

		return Redirect::route('sinh_viens.index');
	}

}
