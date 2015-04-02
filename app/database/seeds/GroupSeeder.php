<?php

class GroupSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('groups')->delete();

    //Tutor Group
    Sentry::getGroupProvider()->create(array(
          'name'        => 'Tutors',
          'permissions' => array(
              'admin'    => 0,
              'tutor'    => 1,
              'student'  => 1,
          )));

    //Student Group
    Sentry::getGroupProvider()->create(array(
          'name'        => 'Students',
          'permissions' => array(
              'admin'    => 0,
              'tutor'    => 0,
              'student'  => 1,
          )));

    //Admin Group
    Sentry::getGroupProvider()->create(array(
          'name'        => 'Admins',
          'permissions' => array(
              'admin'   => 1,
              'tutor'   => 1,
              'student' => 1,
          )));
  }

}