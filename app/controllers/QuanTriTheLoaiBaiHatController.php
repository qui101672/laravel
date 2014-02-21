<?php

class QuanTriTheLoaiBaiHatController extends BaseController {

	/**
	 * The_loai_bai_viet Repository
	 *
	 * @var The_loai_bai_viet
	 */
	protected $the_loai_bai_viet;

	public function __construct(The_loai_bai_viet $the_loai_bai_viet)
	{
		$this->the_loai_bai_viet = $the_loai_bai_viet;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$the_loai_bai_viets = $this->the_loai_bai_viet->all();

		return View::make('quantritheloaibaiviet.index', compact('the_loai_bai_viets'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quantritheloaibaiviet.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, The_loai_bai_viet::$rules);

		if ($validation->passes())
		{
			$this->the_loai_bai_viet->create($input);

			return Redirect::route('the_loai_bai_viet.index');
		}

		return Redirect::route('the_loai_bai_viet.create')
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
		$the_loai_bai_viet = $this->the_loai_bai_viet->findOrFail($id);

		return View::make('quantritheloaibaiviet.show', compact('the_loai_bai_viet'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$the_loai_bai_viet = $this->the_loai_bai_viet->find($id);

		if (is_null($the_loai_bai_viet))
		{
			return Redirect::route('the_loai_bai_viet.index');
		}

		return View::make('quantritheloaibaiviet.edit', compact('the_loai_bai_viet'));
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
		$validation = Validator::make($input, The_loai_bai_viet::$rules);

		if ($validation->passes())
		{
			$the_loai_bai_viet = $this->the_loai_bai_viet->find($id);
			$the_loai_bai_viet->update($input);

			return Redirect::route('the_loai_bai_viet.show', $id);
		}

		return Redirect::route('the_loai_bai_viet.edit', $id)
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
		$this->the_loai_bai_viet->find($id)->delete();

		return Redirect::route('the_loai_bai_viet.index');
	}

}
