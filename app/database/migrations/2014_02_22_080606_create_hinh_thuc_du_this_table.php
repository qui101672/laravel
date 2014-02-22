<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHinhThucDuThisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hinh_thuc_du_this', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_hinh_thuc', 10);
			$table->string('ten_hinh_thuc', 50);
			$table->string('noi_dung_hinh_thuc', 255);
			$table->integer('so_luong_yeu_cau');
			$table->integer('so_vong_thi');
			$table->integer('HoiThis_Id');
			$table->integer('HoiThis_DanhMucsId');
			$table->integer('HoiThis_DanhMucHoiThisId');
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
		Schema::drop('hinh_thuc_du_this');
	}

}
