<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanhMucHoiThisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('danh_muc_hoi_this', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_hoi_thi', 10);
			$table->string('ten_hoi_thi', 255);
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
		Schema::drop('danh_muc_hoi_this');
	}

}
