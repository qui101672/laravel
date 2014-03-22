<?php

class Thanh_phan_tham_giaController extends BaseController {

	/**
	 * Thanh_phan_tham_gium Repository
	 *
	 * @var Thanh_phan_tham_gium
	 */
	protected $thanh_phan_tham_gium;

	public function __construct(Thanh_phan_tham_gium $thanh_phan_tham_gium)
	{
		$this->thanh_phan_tham_gium = $thanh_phan_tham_gium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$thanh_phan_tham_gia = $this->thanh_phan_tham_gium->all();

		return View::make('thanh_phan_tham_gia.index', compact('thanh_phan_tham_gia'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('thanh_phan_tham_gia.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Thanh_phan_tham_gium::$rules);

		if ($validation->passes())
		{
			$this->thanh_phan_tham_gium->create($input);

			return Redirect::route('thanh_phan_tham_gia.index');
		}

		return Redirect::route('thanh_phan_tham_gia.create')
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
		$thanh_phan_tham_gium = $this->thanh_phan_tham_gium->findOrFail($id);

		return View::make('thanh_phan_tham_gia.show', compact('thanh_phan_tham_gium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$thanh_phan_tham_gium = $this->thanh_phan_tham_gium->find($id);

		if (is_null($thanh_phan_tham_gium))
		{
			return Redirect::route('thanh_phan_tham_gia.index');
		}

		return View::make('thanh_phan_tham_gia.edit', compact('thanh_phan_tham_gium'));
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
		$validation = Validator::make($input, Thanh_phan_tham_gium::$rules);

		if ($validation->passes())
		{
			$thanh_phan_tham_gium = $this->thanh_phan_tham_gium->find($id);
			$thanh_phan_tham_gium->update($input);

			return Redirect::route('thanh_phan_tham_gia.show', $id);
		}

		return Redirect::route('thanh_phan_tham_gia.edit', $id)
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
		$this->thanh_phan_tham_gium->find($id)->delete();

		return Redirect::route('thanh_phan_tham_gia.index');
	}

}
