<?php

class Tai_khoansTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tai_khoans')->truncate();

		$users = array(

		);

		// Uncomment the below to run the seeder
		 DB::table('tai_khoans')->insert($users);
	}

}
