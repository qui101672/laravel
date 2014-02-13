<?php

class Bai_vietsController extends BaseController {

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
		$bai_viets = $this->bai_viet->all();

		return View::make('bai_viets.index', compact('bai_viets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bai_viets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Bai_viet::$rules);

		if ($validation->passes())
		{
			$this->bai_viet->create($input);

			return Redirect::route('bai_viets.index');
		}

		return Redirect::route('bai_viets.create')
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
		$bai_viet = $this->bai_viet->findOrFail($id);

		return View::make('bai_viets.show', compact('bai_viet'));
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
			return Redirect::route('bai_viets.index');
		}

		return View::make('bai_viets.edit', compact('bai_viet'));
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

			return Redirect::route('bai_viets.show', $id);
		}

		return Redirect::route('bai_viets.edit', $id)
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

		return Redirect::route('bai_viets.index');
	}

}
