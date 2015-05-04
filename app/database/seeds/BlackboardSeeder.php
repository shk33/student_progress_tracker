<?php

class BlackboardSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('blackboards')->delete();

    $groups = ScholarGroup::all();

    foreach ($groups as $group) {
      Blackboard::create(array(
          'scholar_group_id' => $group->id
      ));     
    }
  }
}