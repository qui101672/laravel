<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lops', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_lop', 10);
			$table->string('ten_lop', 100);
			$table->integer('so_luong');
			$table->integer('khoa_hoc');
			$table->integer('Nganhs_Id');
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
		Schema::drop('lops');
	}

}
