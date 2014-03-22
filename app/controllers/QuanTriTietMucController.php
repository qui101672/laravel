<?php

class QuanTriTietMucController extends BaseController {

	/**
	 * Tiet_muc_du_thi Repository
	 *
	 * @var Tiet_muc_du_thi
	 */
	protected $tiet_muc_du_thi;

	public function __construct(Tiet_muc_du_thi $tiet_muc_du_thi)
	{
		$this->tiet_muc_du_thi = $tiet_muc_du_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tiet_muc_du_this = $this->tiet_muc_du_thi->all();

		return View::make('tiet_muc_du_this.index', compact('tiet_muc_du_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tiet_muc_du_this.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Tiet_muc_du_thi::$rules);

		if ($validation->passes())
		{
			$this->tiet_muc_du_thi->create($input);

			return Redirect::route('tiet_muc_du_this.index');
		}

		return Redirect::route('tiet_muc_du_this.create')
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
		$tiet_muc_du_thi = $this->tiet_muc_du_thi->findOrFail($id);

		return View::make('tiet_muc_du_this.show', compact('tiet_muc_du_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tiet_muc_du_thi = $this->tiet_muc_du_thi->find($id);

		if (is_null($tiet_muc_du_thi))
		{
			return Redirect::route('tiet_muc_du_this.index');
		}

		return View::make('tiet_muc_du_this.edit', compact('tiet_muc_du_thi'));
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
		$validation = Validator::make($input, Tiet_muc_du_thi::$rules);

		if ($validation->passes())
		{
			$tiet_muc_du_thi = $this->tiet_muc_du_thi->find($id);
			$tiet_muc_du_thi->update($input);

			return Redirect::route('tiet_muc_du_this.show', $id);
		}

		return Redirect::route('tiet_muc_du_this.edit', $id)
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
		$this->tiet_muc_du_thi->find($id)->delete();

		return Redirect::route('tiet_muc_du_this.index');
	}

}
