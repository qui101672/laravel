<?php

class QuantrihoithiController extends BaseController {

	/**
	 * Quantrihoithi Repository
	 *
	 * @var Quantrihoithi
	 */
	protected $quantrihoithi;

	public function __construct(Quantrihoithi $quantrihoithi)
	{
		$this->quantrihoithi = $quantrihoithi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$quantrihoithis = $this->quantrihoithi->all();

		return View::make('quantrihoithi.index', compact('quantrihoithis'));
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
		$validation = Validator::make($input, Quantrihoithi::$rules);

		if ($validation->passes())
		{
			$this->quantrihoithi->create($input);

			return Redirect::route('quantrihoithi.index');
		}

		return Redirect::route('quantrihoithi.create')
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
		$quantrihoithi = $this->quantrihoithi->findOrFail($id);

		return View::make('quantrihoithi.show', compact('quantrihoithi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quantrihoithi = $this->quantrihoithi->find($id);

		if (is_null($quantrihoithi))
		{
			return Redirect::route('quantrihoithi.index');
		}

		return View::make('quantrihoithi.edit', compact('quantrihoithi'));
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
		$validation = Validator::make($input, Quantrihoithi::$rules);

		if ($validation->passes())
		{
			$quantrihoithi = $this->quantrihoithi->find($id);
			$quantrihoithi->update($input);

			return Redirect::route('quantrihoithi.show', $id);
		}

		return Redirect::route('quantrihoithi.edit', $id)
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
		$this->quantrihoithi->find($id)->delete();

		return Redirect::route('quantrihoithi.index');
	}

}
