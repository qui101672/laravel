<?php

class NguoiDungTaiKhoanController extends BaseController {

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
			'PhanQuyen_Id' => Input::get('PhanQuyen_Id')
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
			return Redirect::route('nguoidungtaikhoan.edit');
		}

		return View::make('nguoidungtaikhoan.edit', compact('tai_khoan'));
		
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


	public function login(){
		$user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
    		switch (Auth::user()->PhanQuyen_Id) {
                    case 1: Session::put('role', 'admin');break;
                    case 2: Session::put('role', 'sinhvien');break;
                    case 3:	Session::put('role', 'canbo');break;
                    case 4: Session::put('role', 'quanly');break;
                    case 5: Session::put('role', 'thuky');break;
                    case 6: Session::put('role', 'bantochuc');break;
                    case 7: Session::put('role', 'bangiamkhao');break;
                }
            return Redirect::route('home')
                ->with('flash_notice', 'Bạn đã đăng nhập thành công!!!');
        }
        
        // authentication failure! lets go back to the login page
        return Redirect::route('login')
            ->with('flash_error', 'Username hoặc Password không đúng')
            ->withInput();
	}
	public function profile(){
		if(Auth::user()->doi_tuong == 'Sinh Viên'){
			$info_user = DB::table('sinh_viens')->where('TaiKhoans_Id',Auth::user()->id)->first();
			return View::make('nguoidungtaikhoan.profile', compact('info_user')); 
		}
		elseif(Auth::user()->doi_tuong == 'Cán Bộ'){
			$info_user = DB::table('can_bos')->where('TaiKhoans_Id',Auth::user()->id)->first();
			return View::make('nguoidungtaikhoan.profile', compact('info_user')); 
		};
		return Redirect::route('login');
	}

}
