<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GroupSeeder');
		$this->call('UserSeeder');
		$this->call('UserGroupSeeder');
		$this->call('ScholarGroupSeeder');
		$this->call('ScholarGroupUserSeeder');
		$this->call('BlackboardSeeder');
	}

}
