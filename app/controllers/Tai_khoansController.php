<?php

class Tai_khoansController extends BaseController {

	/**
	 * Tai_khoan Repository
	 *
	 * @var Tai_khoan
	 */
	protected $tai_khoan;

	public function __construct(Tai_khoan $tai_khoan)
	{
		$this->tai_khoan = $tai_khoan;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tai_khoans = $this->tai_khoan->all();

		return View::make('tai_khoans.index', compact('tai_khoans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tai_khoans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array(
			'username' => Input::get('username'),
			'password' => Hash::Make(Input::get('password')),
			'ma_quyen' => Input::get('ma_quyen')
			);
		$validation = Validator::make($input, Tai_khoan::$rules);

		if ($validation->passes())
		{
			$this->tai_khoan->create($input);

			return Redirect::route('tai_khoans.index');
		}

		return Redirect::route('tai_khoans.create')
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
		$tai_khoan = $this->tai_khoan->findOrFail($id);

		return View::make('tai_khoans.show', compact('tai_khoan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tai_khoan = $this->tai_khoan->find($id);

		if (is_null($tai_khoan))
		{
			return Redirect::route('tai_khoans.index');
		}

		return View::make('tai_khoans.edit', compact('tai_khoan'));
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
		$validation = Validator::make($input, Tai_khoan::$rules);

		if ($validation->passes())
		{
			$tai_khoan = $this->tai_khoan->find($id);
			$tai_khoan->update($input);

			return Redirect::route('tai_khoans.show', $id);
		}

		return Redirect::route('tai_khoans.edit', $id)
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
		$this->tai_khoan->find($id)->delete();

		return Redirect::route('tai_khoans.index');
	}
	public function dangnhap(){
		$userdata = array(
		'username' => Input::get('username') , 
		'password' => Input::get('password'));
			if (Auth::attempt($userdata)) {
				return Redirect::to('dashboard');
			}else{
				echo "Try again sucka!";
			}
	}

}
