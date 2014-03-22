<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThanhVienBgksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thanh_vien_bgks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_thanh_vien');
			$table->string('ho_ten');
			$table->string('vi_tri');
			$table->string('ghi_chu');
			$table->integer('HoiThis_Id');
			$table->integer('TaiKhoans_Id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('thanh_vien_bgks');
	}

}
