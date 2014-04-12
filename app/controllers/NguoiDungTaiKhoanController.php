<?php

class NguoiDungTaiKhoanController extends BaseController {

    /**
     * Tai_khoan Repository
     *
     * @var Tai_khoan
     */
    protected $tai_khoan;

    public function __construct(Tai_khoan $tai_khoan) {
        $this->tai_khoan = $tai_khoan;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $info_user = $this->tai_khoan->all();

        return View::make('nguoidungtaikhoan.index', compact('info_user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {

        $tai_khoan = $this->tai_khoan->findOrFail($id);

        return View::make('nguoidungtaikhoan.profile', compact('tai_khoan'));
    }

    public function login() {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($user)) {
            switch (Auth::user()->PhanQuyen_Id) {
                case 1: Session::put('role', 'admin');
                    break;
                case 2: Session::put('role', 'sinhvien');
                    break;
                case 3: Session::put('role', 'canbo');
                    break;
                case 4: Session::put('role', 'quanly');
                    break;
                case 5: Session::put('role', 'bantochuc');
                    break;
                case 6: Session::put('role', 'bangiamkhao');
                    break;
            }
            return Redirect::route('home')
                            ->with('flash_notice', 'Bạn đã đăng nhập thành công!!!');
       } 
        else {
            $check_username = DB::table('tai_khoans')->where('username', '=', $user['username'])->count();
            if ($check_username == 1) {
                return Redirect::route('login')
                                ->with('flash_error', 'Username hoặc Password không đúng')
                                ->withInput();
            } else {
                //chứng thực tài khoản
                $tai_khoan = new Tai_khoan();
                $check_user = $tai_khoan->check_ad($user);
                if ($check_user == 1) {
                    return View::make('nguoidungtaikhoan.ad')->with('user',$user);
                } else {
                    return Redirect::route('login')
                                    ->with('flash_error', 'Tài Khoản Của Bạn Không Tồn Tại Trong Hệ Thống!!!')
                                    ->withInput();
                }
            }
        }

    }

    public function profile() {
        if (Auth::user()->doi_tuong == 'Sinh Viên') {
            $info_user = DB::table('sinh_viens')->where('TaiKhoans_Id', Auth::user()->id)->get();
            return View::make('nguoidungtaikhoan.profilesv')->with('info_user',$info_user);
        } elseif (Auth::user()->doi_tuong == 'Cán Bộ') {
            $info_user = DB::table('can_bos')->where('TaiKhoans_Id', Auth::user()->id)->get();
            return View::make('nguoidungtaikhoan.profilecb')->with('info_user',$info_user);
        }
    }

    public function edit($id) {
        if (Auth::user()->doi_tuong == "Sinh Viên") {
            $sinh_vien = Sinh_vien::find($id);         
            return View::make('nguoidungtaikhoan.edit', compact('sinh_vien'));
        } elseif (Auth::user()->doi_tuong == "Cán Bộ") {
            $can_bo = Can_bo::find($id);
            return View::make('nguoidungtaikhoan.edit', compact('can_bo'));
        }
    }

    public function update($id) {
        if (Auth::user()->doi_tuong == 'Sinh Viên') {
            $input = array('mssv' => Input::get('mssv'), 'ho_ten' => Input::get('ho_ten'), 'Lops_Id' => Input::get('Lops_Id'), 'gioi_tinh' => Input::get('gioi_tinh'), 'ngay_sinh' => Input::get('ngay_sinh'), 'dia_chi' => Input::get('dia_chi'), 'que_quan' => Input::get('que_quan'), 'email' => Input::get('email'), 'sdt' => Input::get('sdt'));
            $input['TaiKhoans_Id'] = Auth::user()->id;
            DB::table('sinh_viens')->where('TaiKhoans_Id',Auth::user()->id)->update($input);
            return Redirect::route('profile');
        } elseif (Auth::user()->doi_tuong == 'Cán Bộ') {
            $input = array('mscb' => Input::get('mscb'), 'ho_ten' => Input::get('ho_ten'), 'chuc_vu' => Input::get('chuc_vu'), 'DonVis_Id' => Input::get('DonVis_Id'), 'gioi_tinh' => Input::get('gioi_tinh'), 'ngay_sinh' => Input::get('ngay_sinh'), 'dia_chi' => Input::get('dia_chi'), 'que_quan' => Input::get('que_quan'), 'email' => Input::get('email'), 'sdt' => Input::get('sdt'));
            $input['TaiKhoans_Id'] = Auth::user()->id;
            DB::table('can_bos')->where('TaiKhoans_Id',Auth::user()->id)->update($input);
            return Redirect::route('profile');
        }
    }
    public function store(){
        $input = Input::all();
        if($input['doi_tuong'] == 'Cán Bộ'){
            $id_tk_canbo = DB::table('tai_khoans')->insertGetId(array('username'=>$input['username'],'password'=>Hash::make($input['password']),'doi_tuong'=>$input['doi_tuong'],'PhanQuyen_Id'=>'3'));
            $id_canbo = DB::table('can_bos')->insertGetId(array('TaiKhoans_Id'=>$id_tk_canbo,'mscb'=>$input['username']));
            Auth::attempt(array('username'=>$input['username'],'password'=>$input['password']));
            $can_bo = Can_bo::find($id_canbo);
            return View::make('nguoidungtaikhoan.edit', compact('can_bo'));
        }else if($input['doi_tuong'] == 'Sinh Viên'){
            $id_tk_sv = DB::table('tai_khoans')->insertGetId(array('username'=>$input['username'],'password'=>Hash::make($input['password']),'doi_tuong'=>$input['doi_tuong'],'PhanQuyen_Id'=>'2'));
            $id_sv = DB::table('sinh_viens')->insertGetId(array('TaiKhoans_Id'=>$id_tk_sv,'mssv'=>$input['username']));
            Auth::attempt(array('username'=>$input['username'],'password'=>$input['password']));
            $sinh_vien = Sinh_vien::find($id_sv);         
            return View::make('nguoidungtaikhoan.edit', compact('sinh_vien'));
        }

    }

}
