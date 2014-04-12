<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGiaiThuongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('giai_thuongs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_giai_thuong');
			$table->string('ten_giai_thuong');
			$table->int('so_luong');
			$table->string('so_tien');
			$table->string('ghi_chu');
			$table->string('HinhThucDuThis_Id');
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
		Schema::drop('giai_thuongs');
	}

}
