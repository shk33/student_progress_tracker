<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackboardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blackboards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('scholar_group_id')->unsigned()->nullable();
			$table->foreign('scholar_group_id')->references('id')->on('scholar_groups')
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
		Schema::drop('blackboards');
	}

}
