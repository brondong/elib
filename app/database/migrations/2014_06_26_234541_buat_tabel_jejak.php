<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelJejak extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jejak', function($table)
		{
			$table->increments('id');
			$table->integer('id_user')->unsigned();
			$table->integer('id_aktivitas')->unsigned();
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('id_aktivitas')->references('id')->on('aktivitas')->onDelete('cascade');
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
		Schema::drop('jejak');
	}

}
