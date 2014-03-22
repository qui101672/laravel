<?php

class QuanTriBTCController extends BaseController {

	/**
	 * Btc Repository
	 *
	 * @var Btc
	 */
	protected $btc;

	public function __construct(Btc $btc)
	{
		$this->btc = $btc;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$btcs = $this->btc->all();

		return View::make('quantribtc.index', compact('btcs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantribtc.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Btc::$rules);

		if ($validation->passes())
		{
			$this->btc->create($input);

			return Redirect::route('ban_to_chuc.index');
		}

		return Redirect::route('ban_to_chuc.create')
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
		$btc = $this->btc->findOrFail($id);

		return View::make('quantribtc.show', compact('btc'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$btc = $this->btc->find($id);

		if (is_null($btc))
		{
			return Redirect::route('ban_to_chuc.index');
		}

		return View::make('quantribtc.edit', compact('btc'));
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
		$validation = Validator::make($input, Btc::$rules);

		if ($validation->passes())
		{
			$btc = $this->btc->find($id);
			$btc->update($input);

			return Redirect::route('ban_to_chuc.show', $id);
		}

		return Redirect::route('ban_to_chuc.edit', $id)
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
		$this->btc->find($id)->delete();

		return Redirect::route('ban_to_chuc.index');
	}

}
