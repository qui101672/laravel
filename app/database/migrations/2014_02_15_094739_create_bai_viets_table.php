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
			$table->integer('id');
			$table->string('ma_bai_viet');
			$table->string('tieu_de_bai_viet');
			$table->text('noi_dung_bai_viet');
			$table->integer('id_nguoi_sua');
			$table->integer('TheLoaiBaiViets_Id');
			$table->integer('TaiKhoans_Id');
			$table->string('tag');
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
		Schema::drop('bai_viets');
	}

}
