<?php

class NguoiDungPhieuDangKyController extends BaseController {

    /**
     * phieu_dang_ky Repository
     *
     * @var phieu_dang_ky
     */
    protected $phieu_dang_ky;

    public function __construct(Phieu_dang_ky $phieu_dang_ky) {
        $this->phieu_dang_ky = $phieu_dang_ky;
    }

    public function index() {

        $id_username = Auth::user()->id;

        $phieu_dang_ky = DB::table('phieu_dang_kies')
                ->select('phieu_dang_kies.ma_phieu_dang_ky', 'phieu_dang_kies.id', 'phieu_dang_kies.trang_thai', 'phieu_dang_kies.TaiKhoans_Id', 'phieu_dang_kies.ghi_chu', 'hoi_this.ten_chuong_trinh', 'hoi_this.time_start', 'hoi_this.time_end')
                ->leftJoin('hoi_this', 'phieu_dang_kies.HoiThis_Id', '= ', 'hoi_this.id')
                ->where('TaiKhoans_Id', $id_username)
                ->get();
        
        return View::make('nguoidungdangkytietmuc.index', compact('phieu_dang_ky'));
    }

    public function create() {
        
        $check_hoi_this = new Hoi_thi();
        $results = $check_hoi_this->check_hoi_this();
        if ($results == []) {
            return View::make('nguoidungdangkytietmuc.create')->with('notic', 'Thời Điểm Hiện Tại Không Diễn Ra Hội Thi Nào!!!');
        } else {
            $check_phieu = DB::table('phieu_dang_kies')->where('TaiKhoans_Id', '=', Auth::user()->id)->count();
            foreach ($results as $results) {
                $hoithis_maht = $results->ma_hoi_thi;
                $ds_hinhthuc = DB::table('hinh_thuc_du_this')->where('HoiThis_Id', $results->id)->get();
            }
            return View::make('nguoidungdangkytietmuc.create')->with('ds_hinhthuc', $ds_hinhthuc)->with('hoithis_maht', $hoithis_maht)->with('hoi_thi', $results)->with('check_phieu',$check_phieu);
        }
         
    }

    public function store() {
        
        $input_phieudk = array('ma_phieu_dang_ky' => Input::get('ma_phieu_dang_ky'), 'HoiThis_Id' => Input::get('HoiThis_Id'), 'HoiThis_DanhMucNamsId' => Input::get('HoiThis_DanhMucNamsId'), 'HoiThis_DanhMucHoiThisId' => Input::get('HoiThis_DanhMucHoiThisId'), 'ghi_chu' => Input::get('ghi_chu_pdk'),'TaiKhoans_Id'=> Auth::user()->id);        
        
        $id_hinhthuc = Input::get('HinhThucDuThis_Id');
        
        $id_vongthi = DB::table('vong_this')
                ->where('HinhThucDuThis_Id',$id_hinhthuc)
                ->where('ma_vong_thi','1')
                ->pluck('id');
        
        $id_phieudangky = DB::table('phieu_dang_kies')->insertGetId($input_phieudk);
        
        $input_tietmuc = array('ms_tiet_muc'=>Input::get('ms_tiet_muc'),'ten_tiet_muc' =>Input::get('ten_tiet_muc') ,'trinh_bay'=>Input::get('trinh_bay'),'the_loai_tiet_muc'=>Input::get('the_loai_tiet_muc'),'HinhThucDuThis_Id'=>Input::get('HinhThucDuThis_Id'),'BaiHats_Id'=>Input::get('BaiHats_Id'),'ghi_chu'=>Input::get('ghi_chu_tietmuc'),'VongThis_Id'=>$id_vongthi,'PhieuDangKys_Id'=>$id_phieudangky);

        DB::table('tiet_muc_du_this')->insert($input_tietmuc);
        return Redirect::route('dang_ky_phieus.index');
    }

    public function store_tietmuc() {
        $input = Input::all();
        $array = array('ten_tiet_muc' => $input['ten_tiet_muc'], 'trinh_bay' => $input['trinh_bay'], 'the_loai_tiet_muc' => $input['the_loai_tiet_muc'], 'baihats_id' => $input['baihats_id'], 'vongthis_id' => $input['vongthis_id'] + 1, 'hinhthucduthis_id' => $input['hinhthucduthis_id'], 'phieudangkys_id' => $input['phieudangkys_id']);
        $id = DB::table('tiet_muc_du_this')->insertGetId($array);
        return $id;
    }

    public function dangkytietmucvong($mp, $mh, $mv) {
        return View::make('nguoidungdangkytietmuc.tietmucdangky')
                        ->with('maphieu', $mp)->with('mahinhthuc', $mh)->with('mavong', $mv);
    }

    public function show($id) {
        $so_vong_thi = DB::table('tiet_muc_du_this')
                ->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
                ->leftJoin('vong_this', 'tiet_muc_du_this.VongThis_Id', '=', 'vong_this.id')
                ->where('tiet_muc_du_this.PhieuDangKys_Id', '=', $id)
                ->count();

        $vong_thi_ht = DB::table('tiet_muc_du_this')
                        ->leftJoin('hinh_thuc_du_this', 'tiet_muc_du_this.HinhThucDuThis_Id', '=', 'hinh_thuc_du_this.id')
                        ->where('tiet_muc_du_this.PhieuDangKys_Id', '=', $id)
                        ->select('hinh_thuc_du_this.so_vong_thi')->pluck('hinh_thuc_du_this.so_vong_thi');

        $ket_qua_vong_thi = null;
        if ($so_vong_thi == '2' && $so_vong_thi < $vong_thi_ht) {
            $ket_qua_vong_thi = DB::table('tiet_muc_du_this')
                            ->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
                            ->leftJoin('vong_this', 'tiet_muc_du_this.VongThis_Id', '=', 'vong_this.id')
                            ->where('tiet_muc_du_this.PhieuDangKys_Id', '=', $id)
                            ->where('vong_this.ma_vong_thi', '=', '2')
                            ->select('tiet_muc_du_this.ket_qua', 'vong_this.ma_vong_thi', 'tiet_muc_du_this.VongThis_Id', 'tiet_muc_du_this.PhieuDangKys_Id', 'tiet_muc_du_this.HinhThucDuThis_Id')->get();
        } elseif ($so_vong_thi == '1') {
            $ket_qua_vong_thi = DB::table('tiet_muc_du_this')
                            ->leftJoin('phieu_dang_kies', 'tiet_muc_du_this.PhieuDangKys_Id', '=', 'phieu_dang_kies.id')
                            ->leftJoin('vong_this', 'tiet_muc_du_this.VongThis_Id', '=', 'vong_this.id')
                            ->where('tiet_muc_du_this.PhieuDangKys_Id', '=', $id)
                            ->where('vong_this.ma_vong_thi', '=', '1')
                            ->select('tiet_muc_du_this.ket_qua', 'vong_this.ma_vong_thi', 'tiet_muc_du_this.VongThis_Id', 'tiet_muc_du_this.PhieuDangKys_Id', 'tiet_muc_du_this.HinhThucDuThis_Id')->get();
        }

        $results = DB::table('tiet_muc_du_this')
                ->leftJoin('vong_this', 'tiet_muc_du_this.VongThis_Id', '= ', 'vong_this.id')
                ->where('tiet_muc_du_this.PhieuDangKys_Id', '=', $id)
                ->select('vong_this.ten_vong_thi', 'tiet_muc_du_this.ms_tiet_muc', 'tiet_muc_du_this.ten_tiet_muc', 'tiet_muc_du_this.the_loai_tiet_muc', 'tiet_muc_du_this.ket_qua')
                ->get();
        if ($ket_qua_vong_thi != null) {
            return View::make('nguoidungdangkytietmuc.show')->with('results', $results)->with('ket_qua_vong_thi', $ket_qua_vong_thi);
        } else {
            return View::make('nguoidungdangkytietmuc.show')->with('results', $results)->with('ket_qua_vong_thi', null);
        }
    }

}
