<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricticesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('prictices', function (Blueprint $table) {
			$table->increments('id');
			$table->string('stu_id', 15)->comment('学号');
			$table->string('sp_name')->index()->comment('实践名称');
			$table->tinyInteger('sp_class')->comment('实践等级');
			$table->time('sp_time')->comment('实践时间');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('prictices');
	}
}
