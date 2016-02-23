<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$roles = [
			['name' => Role::TEACHER_ROLE],
			['name' => Role::STUDENT_ROLE],
		];
		foreach ($roles as $role) {
			$role = new Role($role);
			$role->save();
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Role::truncate();
	}

}