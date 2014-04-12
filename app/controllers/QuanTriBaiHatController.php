<?php

class Bai_hatsController extends BaseController {

	/**
	 * Bai_hat Repository
	 *
	 * @var Bai_hat
	 */
	protected $bai_hat;

	public function __construct(Bai_hat $bai_hat)
	{
		$this->bai_hat = $bai_hat;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bai_hats = $this->bai_hat->all();

		return View::make('bai_hats.index', compact('bai_hats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bai_hats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Bai_hat::$rules);

		if ($validation->passes())
		{
			$this->bai_hat->create($input);

			return Redirect::route('bai_hats.index');
		}

		return Redirect::route('bai_hats.create')
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
		$bai_hat = $this->bai_hat->findOrFail($id);

		return View::make('bai_hats.show', compact('bai_hat'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bai_hat = $this->bai_hat->find($id);

		if (is_null($bai_hat))
		{
			return Redirect::route('bai_hats.index');
		}

		return View::make('bai_hats.edit', compact('bai_hat'));
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
		$validation = Validator::make($input, Bai_hat::$rules);

		if ($validation->passes())
		{
			$bai_hat = $this->bai_hat->find($id);
			$bai_hat->update($input);

			return Redirect::route('bai_hats.show', $id);
		}

		return Redirect::route('bai_hats.edit', $id)
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
		$this->bai_hat->find($id)->delete();

		return Redirect::route('bai_hats.index');
	}

}
