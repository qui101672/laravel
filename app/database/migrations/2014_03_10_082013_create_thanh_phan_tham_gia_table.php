<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThanhPhanThamGiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thanh_phan_tham_gia', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('TaiKhoans_Id');
			$table->integer('TietMucDuThis_Id');
			$table->string('ghi_chu');
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
		Schema::drop('thanh_phan_tham_gia');
	}

}
