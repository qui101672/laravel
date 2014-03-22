<?php 

class NguoiDungPhieuDangKyController extends BaseController {

	/**
	 * phieu_dang_ky Repository
	 *
	 * @var phieu_dang_ky
	 */
	protected $phieu_dang_ky;

	public function __construct(Phieu_dang_ky $phieu_dang_ky)
	{
		$this->phieu_dang_ky = $phieu_dang_ky;
	}
	public function index(){

		$id_username = Auth::user()->id;

		// $phieu_dang_ky = $this->phieu_dang_ky->where('TaiKhoans_Id',$id_username)->get();

		$phieu_dang_ky = DB::table('phieu_dang_kies')
								->select('phieu_dang_kies.ma_phieu_dang_ky','phieu_dang_kies.id','phieu_dang_kies.trang_thai','phieu_dang_kies.TaiKhoans_Id','phieu_dang_kies.ghi_chu','hoi_this.ten_chuong_trinh','hoi_this.time_start','hoi_this.time_end')
						        ->leftJoin('hoi_this', 'phieu_dang_kies.HoiThis_Id', '= ','hoi_this.id')
						        ->where('TaiKhoans_Id', $id_username)
						        ->get();
		return View::make('nguoidungdangkytietmuc.index',compact('phieu_dang_ky'));
	}
	public function create(){
			$check_hoi_this = new Hoi_thi();
			$results = $check_hoi_this->check_hoi_this();	

			foreach ($results as $results) {
					$hoithis_maht = $results->ma_hoi_thi;
					$ds_hoithi = DB::table('hinh_thuc_du_this')->where('HoiThis_Id',$results->id)->get();
			}
		return View::make('nguoidungdangkytietmuc.create')->with('ds_hoithi',$ds_hoithi)->with('hoithis_maht',$hoithis_maht);
	}
	public function store(){

	}
	public function show($id){

	}

}
