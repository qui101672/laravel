<?php

class Tai_khoansTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tai_khoans')->truncate();

		$users = array(
			array('username'=>'1101675','password'=>Hash::Make('1101675'),'PhanQuyen_Id'=>'3','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101676','password'=>Hash::Make('1101676'),'PhanQuyen_Id'=>'2','doi_tuong'=>'Sinh Viên'),
			array('username'=>'1101677','password'=>Hash::Make('1101677'),'PhanQuyen_Id'=>'3','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101678','password'=>Hash::Make('1101678'),'PhanQuyen_Id'=>'4','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101679','password'=>Hash::Make('1101679'),'PhanQuyen_Id'=>'5','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101680','password'=>Hash::Make('1101680'),'PhanQuyen_Id'=>'6','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101681','password'=>Hash::Make('1101681'),'PhanQuyen_Id'=>'7','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101682','password'=>Hash::Make('1101682'),'PhanQuyen_Id'=>'1','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101683','password'=>Hash::Make('1101683'),'PhanQuyen_Id'=>'2','doi_tuong'=>'Sinh Viên'),
			array('username'=>'1101684','password'=>Hash::Make('1101684'),'PhanQuyen_Id'=>'3','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101685','password'=>Hash::Make('1101685'),'PhanQuyen_Id'=>'4','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101686','password'=>Hash::Make('1101686'),'PhanQuyen_Id'=>'5','doi_tuong'=>'Sinh Viên'),
			array('username'=>'1101687','password'=>Hash::Make('1101687'),'PhanQuyen_Id'=>'6','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101688','password'=>Hash::Make('1101688'),'PhanQuyen_Id'=>'7','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101689','password'=>Hash::Make('1101689'),'PhanQuyen_Id'=>'3','doi_tuong'=>'Cán Bộ'),
			array('username'=>'1101690','password'=>Hash::Make('1101690'),'PhanQuyen_Id'=>'3','doi_tuong'=>'Cán Bộ')
		);

		// Uncomment the below to run the seeder
		 DB::table('tai_khoans')->insert($users);
	}

}
