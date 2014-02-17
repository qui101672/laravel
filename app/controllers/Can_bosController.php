<?php

class Can_bosController extends BaseController {

	/**
	 * Can_bo Repository
	 *
	 * @var Can_bo
	 */
	protected $can_bo;

	public function __construct(Can_bo $can_bo)
	{
		$this->can_bo = $can_bo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$can_bos = $this->can_bo->all();

		return View::make('can_bos.index', compact('can_bos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('can_bos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Can_bo::$rules);

		if ($validation->passes())
		{
			$this->can_bo->create($input);

			return Redirect::route('can_bos.index');
		}

		return Redirect::route('can_bos.create')
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
		$can_bo = $this->can_bo->findOrFail($id);

		return View::make('can_bos.show', compact('can_bo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$can_bo = $this->can_bo->find($id);

		if (is_null($can_bo))
		{
			return Redirect::route('can_bos.index');
		}

		return View::make('can_bos.edit', compact('can_bo'));
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
		$validation = Validator::make($input, Can_bo::$rules);

		if ($validation->passes())
		{
			$can_bo = $this->can_bo->find($id);
			$can_bo->update($input);

			return Redirect::route('can_bos.show', $id);
		}

		return Redirect::route('can_bos.edit', $id)
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
		$this->can_bo->find($id)->delete();

		return Redirect::route('can_bos.index');
	}

}
