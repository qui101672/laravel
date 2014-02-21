<?php

class Phan_quyensController extends BaseController {

	/**
	 * Phan_quyen Repository
	 *
	 * @var Phan_quyen
	 */
	protected $phan_quyen;

	public function __construct(Phan_quyen $phan_quyen)
	{
		$this->phan_quyen = $phan_quyen;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$phan_quyens = $this->phan_quyen->all();

		return View::make('phan_quyens.index', compact('phan_quyens'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('phan_quyens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Phan_quyen::$rules);

		if ($validation->passes())
		{
			$this->phan_quyen->create($input);

			return Redirect::route('phan_quyens.index');
		}

		return Redirect::route('phan_quyens.create')
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
		$phan_quyen = $this->phan_quyen->findOrFail($id);

		return View::make('phan_quyens.show', compact('phan_quyen'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phan_quyen = $this->phan_quyen->find($id);

		if (is_null($phan_quyen))
		{
			return Redirect::route('phan_quyens.index');
		}

		return View::make('phan_quyens.edit', compact('phan_quyen'));
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
		$validation = Validator::make($input, Phan_quyen::$rules);

		if ($validation->passes())
		{
			$phan_quyen = $this->phan_quyen->find($id);
			$phan_quyen->update($input);

			return Redirect::route('phan_quyens.show', $id);
		}

		return Redirect::route('phan_quyens.edit', $id)
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
		$this->phan_quyen->find($id)->delete();

		return Redirect::route('phan_quyens.index');
	}

}
