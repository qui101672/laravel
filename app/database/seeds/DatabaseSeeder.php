<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('Tai_khoansTableSeeder');
		$this->call('Bai_vietsTableSeeder');
		$this->call('The_loai_bai_vietsTableSeeder');
		$this->call('NganhsTableSeeder');
		$this->call('Don_visTableSeeder');
		$this->call('Sinh_viensTableSeeder');
		$this->call('Can_bosTableSeeder');
		$this->call('QuantrihoithisTableSeeder');
		$this->call('Hoi_thisTableSeeder');
		$this->call('LopsTableSeeder');
		$this->call('Phan_quyensTableSeeder');
		$this->call('Hinh_thuc_du_thisTableSeeder');
		$this->call('Vong_thisTableSeeder');
		$this->call('Danh_muc_namsTableSeeder');
		$this->call('Danh_muc_hoi_thisTableSeeder');
		$this->call('Bai_hatsTableSeeder');
		$this->call('Tac_giaTableSeeder');
		$this->call('Phieu_dang_kiesTableSeeder');
		$this->call('Thanh_vien_bgksTableSeeder');
		$this->call('Ban_to_chucsTableSeeder');
		$this->call('BtcsTableSeeder');
		$this->call('Tiet_muc_du_thisTableSeeder');
		$this->call('Thanh_phan_tham_giaTableSeeder');
		$this->call('Giai_thuongsTableSeeder');
	}

}