<?php

class Tac_gia extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'ma_tac_gia' => 'required',
		'ho_ten' => 'required',
		'ghi_chu' => ''
	);
        
        public function get_dstacgia(){
            $results =  DB::table('tac_gias')->orderBy('ho_ten','asc')->get();
            return $results;
        }
}
