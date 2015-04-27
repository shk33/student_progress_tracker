<?php

class ScholarGroupUserSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('scholar_groups_users')->delete();

    $students = Sentry::findAllUsers();
    $studentGroup = Sentry::findGroupByName('Students');
    $scholarGroups = ScholarGroup::take(10)->get();

    foreach ($scholarGroups as $group) {
      foreach ($students as $student) {
        if ($student->inGroup($studentGroup)) {
          $group->users()->attach($student->id);
        }
      }
    }

  }
}