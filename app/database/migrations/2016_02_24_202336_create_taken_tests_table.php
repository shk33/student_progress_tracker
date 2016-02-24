<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakenTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taken_tests', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('student_test_id')->unsigned();
			$table->foreign('student_test_id')->references('id')
				->on('student_tests');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')
				->on('users');

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
		Schema::drop('taken_tests');
	}

}
