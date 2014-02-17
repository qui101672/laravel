<?php

class NganhsController extends BaseController {

	/**
	 * Nganh Repository
	 *
	 * @var Nganh
	 */
	protected $nganh;

	public function __construct(Nganh $nganh)
	{
		$this->nganh = $nganh;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$nganhs = $this->nganh->all();

		return View::make('nganhs.index', compact('nganhs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('nganhs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Nganh::$rules);

		if ($validation->passes())
		{
			$this->nganh->create($input);

			return Redirect::route('nganhs.index');
		}

		return Redirect::route('nganhs.create')
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
		$nganh = $this->nganh->findOrFail($id);

		return View::make('nganhs.show', compact('nganh'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$nganh = $this->nganh->find($id);

		if (is_null($nganh))
		{
			return Redirect::route('nganhs.index');
		}

		return View::make('nganhs.edit', compact('nganh'));
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
		$validation = Validator::make($input, Nganh::$rules);

		if ($validation->passes())
		{
			$nganh = $this->nganh->find($id);
			$nganh->update($input);

			return Redirect::route('nganhs.show', $id);
		}

		return Redirect::route('nganhs.edit', $id)
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
		$this->nganh->find($id)->delete();

		return Redirect::route('nganhs.index');
	}

}
