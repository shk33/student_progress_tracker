<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('is_correct')->default(false);

			$table->integer('taken_test_id')->unsigned();
			$table->foreign('taken_test_id')->references('id')
				->on('taken_tests');

			$table->integer('option_id')->unsigned();
			$table->foreign('option_id')->references('id')
				->on('options');

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
		Schema::drop('answers');
	}

}
