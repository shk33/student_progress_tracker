<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('attachment_file_name')->nullable();
      $table->integer('attachment_file_size')->nullable();
      $table->string('attachment_content_type')->nullable();
      $table->timestamp('attachment_updated_at')->nullable();
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
		Schema::drop('files');
	}

}
