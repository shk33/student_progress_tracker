<?php

class ScholarGroupSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('scholar_groups')->delete();

    $faker  = Faker\Factory::create();
    $tutors = Sentry::findAllUsers();
    $tutorGroup = Sentry::findGroupByName('Tutors');

    foreach ($tutors as $tutor) {
      if ($tutor->inGroup($tutorGroup)) {
        //Create a 2 scholar groups per tutor
        for ($i=0; $i < 2 ; $i++) {
          ScholarGroup::create(array(
              'name' => $faker->sentence(5),
              'description'  => $faker->paragraph(4),
              'user_id'      => $tutor->id,
          ));     
        }
      }
    }
  }
}