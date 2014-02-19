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
		Schema::create('Hoi_this', function(Blueprint $table) {
			$table->increments('id');
			$table->sring('ten_chuong_trinh', 255);
			$table->date('time_start');
			$table->date('time_end');
			$table->string('ghi_chu', 255);
			$table->integer('DanhMucHoiThis_Id');
			$table->Integer('DanhMucNams_Id');
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
		Schema::drop('Hoi_this');
	}

}
