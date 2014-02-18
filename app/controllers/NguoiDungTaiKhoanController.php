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
		$info_user = $this->tai_khoan->all();

		return View::make('nguoidungtaikhoan.index', compact('info_user'));
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

		return View::make('nguoidungtaikhoan.profile', compact('tai_khoan'));
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
	}

	public function edit($id)
	{
		if(Auth::user()->doi_tuong == "Sinh Viên"){
				$sinh_vien = Sinh_vien::find($id);

				if (is_null($sinh_vien))
				{
					return Redirect::route('nguoidungtaikhoan.index');
				}

				return View::make('nguoidungtaikhoan.edit', compact('sinh_vien'));
			}
			elseif(Auth::user()->doi_tuong =="Cán Bộ"){
				$can_bo = Can_bo::find($id);

				if (is_null($can_bo))
				{
					return Redirect::route('nguoidungtaikhoan.index');
				}

				return View::make('nguoidungtaikhoan.edit', compact('can_bo'));
			}
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Sinh_vien::$rules);

		if ($validation->passes())
		{
			$sinh_vien = $this->sinh_vien->find($id);
			$sinh_vien->update($input);

			return Redirect::route('thong_tin.show', $id);
		}

		return Redirect::route('thong_tin.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

}
