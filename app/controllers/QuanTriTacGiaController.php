<?php

class QuanTriTacGiaController extends BaseController {

	/**
	 * Tac_gia Repository
	 *
	 * @var Tac_gia
	 */
	protected $tac_gia;

	public function __construct(Tac_gia $tac_gia)
	{
		$this->tac_gia = $tac_gia;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tac_gia = $this->tac_gia->all();

		return View::make('quantritacgia.index', compact('tac_gia'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantritacgia.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tac_gia::$rules);

		if ($validation->passes())
		{
			$this->tac_gia->create($input);

			return Redirect::route('tac_gia.index');
		}

		return Redirect::route('tac_gia.create')
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
		$tac_gia = $this->tac_gia->findOrFail($id);

		return View::make('quantritacgia.show', compact('tac_gia'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tac_gia = $this->tac_gia->find($id);

		if (is_null($tac_gia))
		{
			return Redirect::route('tac_gia.index');
		}

		return View::make('quantritacgia.edit', compact('tac_gia'));
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
		$validation = Validator::make($input, Tac_gia::$rules);

		if ($validation->passes())
		{
			$tac_gia = $this->tac_gia->find($id);
			$tac_gia->update($input);

			return Redirect::route('tac_gias.show', $id);
		}

		return Redirect::route('tac_gias.edit', $id)
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
		$this->tac_gia->find($id)->delete();

		return Redirect::route('tac_gia.index');
	}

}
