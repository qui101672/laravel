<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoiThisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hoi_this', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ten_chuong_trinh');
			$table->date('time_start');
			$table->date('time_end');
			$table->integer('DanhMucNams_Id');
			$table->integer('DanhMucHoiThis_Id');
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
		Schema::drop('hoi_this');
	}

}
