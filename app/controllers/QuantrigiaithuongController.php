<?php

class QuantrigiaithuongController extends BaseController {
	public function postStore(){
           $input = array('ma_giai_thuong'=> Input::get('ma_giai_thuong'),'ten_giai_thuong'=> Input::get('ten_giai_thuong'),'HinhThucDuThis_Id'=> Input::get('HinhThucDuThis_Id'),'so_luong'=> Input::get('so_luong'),'so_tien'=> Input::get('so_tien'),'ghi_chu'=> Input::get('ghi_chu'));
           $id = DB::table('giai_thuongs')->insertGetId($input);
           return $id; 
	}

	 

}
