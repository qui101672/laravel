<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBaiHatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bai_hats', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_bai_hat');
			$table->string('ten_bai_hat');
			$table->integer('nam_sang_tac');
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
		Schema::drop('bai_hats');
	}

}
