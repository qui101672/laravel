<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVongThisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vong_this', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_vong_thi', 10);
			$table->string('ten_vong_thi', 50);
			$table->integer('HinhThucDuThis_Id');
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
		Schema::drop('vong_this');
	}

}
