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
		$btcs = new Btc();
                $ds_btcs = $btcs->get_dsbtc();
		return View::make('quantribtc.index')->with('ds_btcs',$ds_btcs);
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
	public function store(){ 
                $vi_tri_btcs = Input::get('vi_tri_btcs');
                $username = Input::get('username');
                $id_hoi_thi = Input::get('HoiThis_Id');
                $TaiKhoans_Id = DB::table('tai_khoans')->where('username','=',$username)->pluck('id');
		$input = array('TaiKhoans_Id'=>$TaiKhoans_Id,'ghi_chu'=>Input::get('ghi_chu'));
		$id_btcs = DB::table('btcs')->insertGetId($input);
                $id = DB::table('to_chuc_hoi_thi')->insertGetId(array('btcs_Id'=>$id_btcs,'HoiThis_Id'=>$id_hoi_thi,'vi_tri_btcs'=>$vi_tri_btcs));
		 
		if($id != null){
			return Redirect::route('ban_to_chuc.index');
                }

		return Redirect::route('ban_to_chuc.create');
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
