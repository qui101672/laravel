<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhieuDangKiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phieu_dang_kies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ma_phieu_dang_ky', 10);
			$table->boolean('trang_thai_phieu');
			$table->string('ghi_chu');
			$table->integer('TaiKhoans_Id');
			$table->integer('HoiThis_Is');
			$table->integer('Hoi_DanhMucNamsId');
			$table->integer('HoiThis_DanhMucHoiThisId');
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
		Schema::drop('phieu_dang_kies');
	}

}
