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
			$table->string('ten_gai_thuong');
			$table->integer('so_luong');
			$table->string('so_tien');
			$table->string('ghi_chu');
			$table->integer('HinhThucDuThis_Id');
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
