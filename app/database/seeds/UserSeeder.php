<?php

class UserSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->delete();

    //Admin User
    Sentry::getUserProvider()->create(array(
          'first_name' => 'Miguel Eduardo',
          'last_name'  => 'Coronel Segovia',
          'email'      => 'admin@admin.com',
          'username'   => 'admin',
          'password'   => 'password',
          'activated'  => 1,
      ));

    //Student User
    Sentry::getUserProvider()->create(array(
        'first_name' => 'Adrian',
        'last_name'  => 'Ferrara de Gouchi',
        'email'      => 'student@student.com',
        'username'   => 'student',
        'password'   => 'password',
        'activated'  => 1,
    ));

    //Tutor User
    Sentry::getUserProvider()->create(array(
        'first_name' => 'Jhon Doe',
        'last_name'  => 'Blue White',
        'email'      => 'tutor@tutor.com',
        'username'   => 'tutor',
        'password'   => 'password',
        'activated'  => 1,
    ));

    $faker = Faker\Factory::create();
    //Creates a 100 students more
    for ($i=0; $i < 100 ; $i++) { 
      Sentry::getUserProvider()->create(array(
          'first_name' => $faker->firstName,
          'last_name'  => $faker->lastName,
          'email'      => "student{$i}@student{$i}.com",
          'username'   => "student{$i}",
          'password'   => 'password',
          'activated'  => 1,
      ));     
    }

    //Creates a 10 tutors more
    for ($i=0; $i < 10 ; $i++) { 
      Sentry::getUserProvider()->create(array(
          'first_name' => $faker->firstName,
          'last_name'  => $faker->lastName,
          'email'      => "tutor{$i}@tutor{$i}.com",
          'username'   => "tutor{$i}",
          'password'   => 'password',
          'activated'  => 1,
      ));     
    }

  }

}