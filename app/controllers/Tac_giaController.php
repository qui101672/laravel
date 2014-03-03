<?php

class Tac_giaController extends BaseController {

	/**
	 * Tac_gium Repository
	 *
	 * @var Tac_gium
	 */
	protected $tac_gium;

	public function __construct(Tac_gium $tac_gium)
	{
		$this->tac_gium = $tac_gium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tac_gia = $this->tac_gium->all();

		return View::make('tac_gia.index', compact('tac_gia'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tac_gia.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tac_gium::$rules);

		if ($validation->passes())
		{
			$this->tac_gium->create($input);

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
		$tac_gium = $this->tac_gium->findOrFail($id);

		return View::make('tac_gia.show', compact('tac_gium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tac_gium = $this->tac_gium->find($id);

		if (is_null($tac_gium))
		{
			return Redirect::route('tac_gia.index');
		}

		return View::make('tac_gia.edit', compact('tac_gium'));
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
		$validation = Validator::make($input, Tac_gium::$rules);

		if ($validation->passes())
		{
			$tac_gium = $this->tac_gium->find($id);
			$tac_gium->update($input);

			return Redirect::route('tac_gia.show', $id);
		}

		return Redirect::route('tac_gia.edit', $id)
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
		$this->tac_gium->find($id)->delete();

		return Redirect::route('tac_gia.index');
	}

}
