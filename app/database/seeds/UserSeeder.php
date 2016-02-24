<?php

class UserSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("SET foreign_key_checks=0");
    User::truncate();
    DB::statement("SET foreign_key_checks=1");

    //Student User
    $student = new User([
        'first_name' => 'Adrian',
        'last_name'  => 'Ferrara de Gouchi',
        'email'      => 'student@student.com',
        'username'   => 'student',
        'password'   => Hash::make('password'),
        'role_id'    => Role::getStudentRole()->id,
    ]);
    $student->save();
    
    //Teacher User
    $teacher = new User([
        'first_name' => 'Jhon Doe',
        'last_name'  => 'Blue White',
        'email'      => 'tutor@tutor.com',
        'username'   => 'tutor',
        'password'   => Hash::make('password'),
        'role_id'    => Role::getTeacherRole()->id,
    ]);
    $teacher->save();

    $faker = Faker\Factory::create();
    //Creates a 100 students more
    for ($i=0; $i < 100 ; $i++) { 
      $student = new User([
          'first_name' => $faker->firstName,
          'last_name'  => $faker->lastName,
          'email'      => "student{$i}@student{$i}.com",
          'username'   => "student{$i}",
          'password'   => Hash::make('password'),
          'role_id'    => Role::getStudentRole()->id,
      ]);     

      $student->save();

    }

  }

}