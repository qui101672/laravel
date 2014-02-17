<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTheLoaiBaiVietsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('the_loai_bai_viets', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_the_loai_bai_viet');
			$table->string('ten_the_loai_bai_viet');
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
		Schema::drop('the_loai_bai_viets');
	}

}
