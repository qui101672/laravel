<?php

class Tai_khoansTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tai_khoans')->truncate();

		$users = array(
			array('username'=>'1101672','password'=>Hash::Make('1101672'),'ma_quyen'=>'1'),
			array('username'=>'1101673','password'=>Hash::Make('1101673'),'ma_quyen'=>'1')
		);

		// Uncomment the below to run the seeder
		 DB::table('tai_khoans')->insert($users);
	}

}
