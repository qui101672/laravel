<?php

class QuanTriLopController extends BaseController {

	/**
	 * Lop Repository
	 *
	 * @var Lop
	 */
	protected $lop;

	public function __construct(Lop $lop)
	{
		$this->lop = $lop;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lops = $this->lop->all();

		return View::make('quantrilop.index', compact('lops'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantrilop.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Lop::$rules);

		if ($validation->passes())
		{
			$this->lop->create($input);

			return Redirect::route('lop.index');
		}

		return Redirect::route('lop.create')
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
		$lop = $this->lop->findOrFail($id);

		return View::make('quantrilop.show', compact('lop'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lop = $this->lop->find($id);

		if (is_null($lop))
		{
			return Redirect::route('lop.index');
		}

		return View::make('quantrilop.edit', compact('lop'));
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
		$validation = Validator::make($input, Lop::$rules);

		if ($validation->passes())
		{
			$lop = $this->lop->find($id);
			$lop->update($input);

			return Redirect::route('lop.show', $id);
		}

		return Redirect::route('lop.edit', $id)
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
		$this->lop->find($id)->delete();

		return Redirect::route('lop.index');
	}

}
