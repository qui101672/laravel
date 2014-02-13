<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaiVietsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bai_viets', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_bai_viet');
			$table->string('ten_bai_viet');
			$table->string('noi_dung_bai_viet');
			$table->integer('id_nguoi_sua');
			$table->integer('id_ma_the_loai_bv');
			$table->integer('id_nguoi_tao');
			$table->string('tag');
			$table->text('ghi_chu');
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
		Schema::drop('bai_viets');
	}

}
