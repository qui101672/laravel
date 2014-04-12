<?php

class QuanTriTaiKhoanController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $tai_khoan;

    public function __construct(Tai_khoan $tai_khoan) {
        $this->tai_khoan = $tai_khoan;
    }

    public function index() {
        $tai_khoan = $this->tai_khoan->all();
        return View::make('quantritaikhoan.index', compact('tai_khoan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('quantritaikhoan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $tai_khoan = $this->tai_khoan->findOrFail($id);

        return View::make('quantritaikhoan.show', compact('tai_khoan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $tai_khoan = $this->tai_khoan->find($id);

        if (is_null($tai_khoan)) {
            return Redirect::route('tai_khoan.index');
        }

        return View::make('quantritaikhoan.edit', compact('tai_khoan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');
        DB::table('tai_khoans')->where('id', $id)->update(array('PhanQuyen_Id' => $input['PhanQuyen_Id']));
        return Redirect::route('tai_khoan.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $this->tai_khoan->find($id)->delete();

        return Redirect::route('tai_khoan.index');
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('home')
                        ->with('flash_notice', 'Bạn đã đăng xuất khỏi hệ thống!!!');
    }

}
