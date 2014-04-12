<?php

class QuanTriHoiThiController extends BaseController {

    /**
     * Hoi_thi Repository
     *
     * @var Hoi_thi
     */
    protected $hoi_thi;

    public function __construct(Hoi_thi $hoi_thi) {
        $this->hoi_thi = $hoi_thi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $hoi_this = $this->hoi_thi->all();

        return View::make('quantrihoithi.index', compact('hoi_this'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $danh_muc_nam = Danh_muc_nam::all();
        $danh_muc_hoi_thi = Danh_muc_hoi_thi::all();
        return View::make('quantrihoithi.create')->with('danh_muc_nam', $danh_muc_nam)
                        ->with('danh_muc_hoi_thi', $danh_muc_hoi_thi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
//        $input = array('ten_chuong_trinh' => Input::get('ten_chuong_trinh'),
//            'DanhMucNams_Id' => Input::get('DanhMucNams_Id'),
//            'DanhMucHoiThis_Id' => Input::get('DanhMucHoiThis_Id'),
//            'time_start' => Input::get('time_start'),
//            'time_end' => Input::get('time_end'),
//            'ghi_chu' => Input::get('ghi_chu')
//        );
//        $id = DB::table('hoi_this')->insertGetId($input);
        $output = $this->hoi_thi->find(7);
        return $output;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {

        $hoi_thi = $this->hoi_thi->findOrFail($id);

        $hinh_thuc = DB::table('hinh_thuc_du_this')->where('HoiThis_Id', $id)->get();
        $hinh_thuc_data = $hinh_thuc;
        $temp = $hinh_thuc;

        foreach ($temp as $key => $value) {
            $vong_thi[$key] = DB::table('vong_this')->where('HinhThucDuThis_Id', $value->id)->get();
            $giai_thuong[$key] = DB::table('giai_thuongs')->where('HinhThucDuThis_Id', $value->id)->get();
        }



        return View::make('quantrihoithi.show')->with('hoi_thi', $hoi_thi)
                        ->with('hinh_thuc', $hinh_thuc)
                        ->with('vong_thi', $vong_thi)
                        ->with('giai_thuong', $giai_thuong)
                        ->with('hinh_thuc_data', $hinh_thuc_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $hoi_thi = $this->hoi_thi->find($id);

        if (is_null($hoi_thi)) {
            return Redirect::route('hoi_this.index');
        }
        return View::make('quantrihoithi.edit', compact('hoi_thi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Hoi_thi::$rules);

        if ($validation->passes()) {
            $hoi_thi = $this->hoi_thi->find($id);
            $hoi_thi->update($input);

            return Redirect::route('hoi_this.show', $id);
        }

        return Redirect::route('hoi_this.edit', $id)
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
    public function destroy($id) {
        $this->hoi_thi->find($id)->delete();

        return Redirect::route('hoi_this.index');
    }

}
