<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonVisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('don_vis', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ma_don_vi');
			$table->string('ten_don_vi');
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
		Schema::drop('don_vis');
	}

}
