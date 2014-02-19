<?php

class QuanTriDonViController extends BaseController {

	/**
	 * Don_vi Repository
	 *
	 * @var Don_vi
	 */
	protected $don_vi;

	public function __construct(Don_vi $don_vi)
	{
		$this->don_vi = $don_vi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$don_vis = $this->don_vi->all();

		return View::make('quantridonvi.index', compact('don_vis'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantridonvi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Don_vi::$rules);

		if ($validation->passes())
		{
			$this->don_vi->create($input);

			return Redirect::route('don_vi.index');
		}

		return Redirect::route('don_vi.create')
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
		$don_vi = $this->don_vi->findOrFail($id);

		return View::make('quantridonvi.show', compact('don_vi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$don_vi = $this->don_vi->find($id);

		if (is_null($don_vi))
		{
			return Redirect::route('don_vi.index');
		}

		return View::make('quantridonvi.edit', compact('don_vi'));
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
		$validation = Validator::make($input, Don_vi::$rules);

		if ($validation->passes())
		{
			$don_vi = $this->don_vi->find($id);
			$don_vi->update($input);

			return Redirect::route('don_vi.show', $id);
		}

		return Redirect::route('don_vi.edit', $id)
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
		$this->don_vi->find($id)->delete();

		return Redirect::route('don_vi.index');
	}

}
