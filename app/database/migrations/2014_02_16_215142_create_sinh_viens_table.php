<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSinhViensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sinh_viens', function(Blueprint $table) {
			$table->increments('id');
			$table->string('mssv');
			$table->string('ho_ten');
			$table->string('gioi_tinh');
			$table->date('ngay_sinh');
			$table->string('dia_chi');
			$table->string('que_quan');
			$table->string('email');
			$table->string('sdt');
			$table->string('ghi_chu');
			$table->integer('Lops_Id');
			$table->integer('TaiKhoans_Id');
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
		Schema::drop('sinh_viens');
	}

}
