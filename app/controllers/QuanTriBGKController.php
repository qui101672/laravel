<?php

class QuanTriBGKController extends BaseController {

	/**
	 * Thanh_vien_bgk Repository
	 *
	 * @var Thanh_vien_bgk
	 */
	protected $thanh_vien_bgk;

	public function __construct(Thanh_vien_bgk $thanh_vien_bgk)
	{
		$this->thanh_vien_bgk = $thanh_vien_bgk;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$thanh_vien_bgks = $this->thanh_vien_bgk->all();

		return View::make('quantribgk.index', compact('thanh_vien_bgks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantribgk.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Thanh_vien_bgk::$rules);

		if ($validation->passes())
		{
			$this->thanh_vien_bgk->create($input);

			return Redirect::route('ban_giam_khaos.index');
		}

		return Redirect::route('ban_giam_khaos.create')
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
		$thanh_vien_bgk = $this->thanh_vien_bgk->findOrFail($id);

		return View::make('quantribgk.show', compact('thanh_vien_bgk'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$thanh_vien_bgk = $this->thanh_vien_bgk->find($id);

		if (is_null($thanh_vien_bgk))
		{
			return Redirect::route('ban_giam_khaos.index');
		}

		return View::make('quantribgk.edit', compact('thanh_vien_bgk'));
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
		$validation = Validator::make($input, Thanh_vien_bgk::$rules);

		if ($validation->passes())
		{
			$thanh_vien_bgk = $this->thanh_vien_bgk->find($id);
			$thanh_vien_bgk->update($input);

			return Redirect::route('ban_giam_khaos.show', $id);
		}

		return Redirect::route('ban_giam_khaos.edit', $id)
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
		$this->thanh_vien_bgk->find($id)->delete();

		return Redirect::route('ban_giam_khaos.index');
	}

}
