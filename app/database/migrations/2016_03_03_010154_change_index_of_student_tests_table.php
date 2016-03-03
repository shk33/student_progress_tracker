<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIndexOfStudentTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('questions', function(Blueprint $table)
		{
			$table->dropForeign('questions_student_test_id_foreign');

			$table->foreign('student_test_id')->references('id')
				->on('student_tests')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_tests', function(Blueprint $table)
		{
			$table->dropForeign('questions_student_test_id_foreign');

			$table->foreign('student_test_id')->references('id')
				->on('student_tests');
		});
	}

}
