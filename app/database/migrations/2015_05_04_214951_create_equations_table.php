<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('content');
			$table->integer('blackboard_id')->unsigned()->nullable();
			$table->foreign('blackboard_id')->references('id')->on('blackboards')
					->onUpdate('cascade');
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
		//
	}

}
