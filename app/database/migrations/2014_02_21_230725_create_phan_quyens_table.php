<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhanQuyensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phan_quyens', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_quyen', 2);
			$table->string('ten_quyen', 30);
			$table->string('ghi_chu', 255);
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
		Schema::drop('phan_quyens');
	}

}
