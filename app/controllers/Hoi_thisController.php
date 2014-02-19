<?php

class Hoi_thisController extends BaseController {

	/**
	 * Hoi_thi Repository
	 *
	 * @var Hoi_thi
	 */
	protected $Hoi_thi;

	public function __construct(Hoi_thi $Hoi_thi)
	{
		$this->Hoi_thi = $Hoi_thi;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Hoi_this = $this->Hoi_thi->all();

		return View::make('Hoi_this.index', compact('Hoi_this'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Hoi_this.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Hoi_thi::$rules);

		if ($validation->passes())
		{
			$this->Hoi_thi->create($input);

			return Redirect::route('Hoi_this.index');
		}

		return Redirect::route('Hoi_this.create')
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
		$Hoi_thi = $this->Hoi_thi->findOrFail($id);

		return View::make('Hoi_this.show', compact('Hoi_thi'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Hoi_thi = $this->Hoi_thi->find($id);

		if (is_null($Hoi_thi))
		{
			return Redirect::route('Hoi_this.index');
		}

		return View::make('Hoi_this.edit', compact('Hoi_thi'));
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
		$validation = Validator::make($input, Hoi_thi::$rules);

		if ($validation->passes())
		{
			$Hoi_thi = $this->Hoi_thi->find($id);
			$Hoi_thi->update($input);

			return Redirect::route('Hoi_this.show', $id);
		}

		return Redirect::route('Hoi_this.edit', $id)
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
		$this->Hoi_thi->find($id)->delete();

		return Redirect::route('Hoi_this.index');
	}

}
