<?php

class QuanTriBaiHatController extends BaseController {

    /**
     * Bai_hat Repository
     *
     * @var Bai_hat
     */
    protected $bai_hat;

    public function __construct(Bai_hat $bai_hat) {
        $this->bai_hat = $bai_hat;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $bai_hats = DB::table('tac_gia_bai_hat')
                ->leftJoin('bai_hats', 'tac_gia_bai_hat.BaiHats_Id', '=', 'bai_hats.id')
                ->leftJoin('tac_gias', 'tac_gia_bai_hat.TacGias_Id', '=', 'tac_gias.id')
                ->select('bai_hats.id', 'bai_hats.ten_bai_hat', 'bai_hats.nam_sang_tac', 'bai_hats.ma_bai_hat', 'bai_hats.ghi_chu', 'tac_gias.ho_ten')
                ->get();
        return View::make('quantribaihat.index', compact('bai_hats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('quantribaihat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $input = array('ma_bai_hat' => Input::get('ma_bai_hat'), 'ma_bai_hat' => Input::get('ma_bai_hat'), 'ten_bai_hat' => Input::get('ten_bai_hat'), 'nam_sang_tac' => Input::get('nam_sang_tac'), 'ghi_chu' => Input::get('ghi_chu'));
        $id_tacgia = Input::get('TacGias_Id');
        $validation = Validator::make($input, Bai_hat::$rules);

        if ($validation->passes()) {
            $id_bai_hat = DB::table('bai_hats')->insert($input);
            DB::table('tac_gia_bai_hat')->insert(array('BaiHats_Id' => $id_bai_hat, 'TacGias_Id' => $id_tacgia));
            return Redirect::route('bai_hats.index');
        }

        return Redirect::route('bai_hats.create')
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
    public function show($id) {
        $bai_hat = $this->bai_hat->findOrFail($id);

        return View::make('quantribaihat.show', compact('bai_hat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $bai_hat = $this->bai_hat->find($id);

        if (is_null($bai_hat)) {
            return Redirect::route('bai_hats.index');
        }

        return View::make('quantribaihat.edit', compact('bai_hat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Bai_hat::$rules);

        if ($validation->passes()) {
            $bai_hat = $this->bai_hat->find($id);
            $bai_hat->update($input);

            return Redirect::route('bai_hats.show', $id);
        }

        return Redirect::route('bai_hats.edit', $id)
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
        $this->bai_hat->find($id)->delete();

        return Redirect::route('bai_hats.index');
    }

}
