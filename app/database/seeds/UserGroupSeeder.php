<?php

class UserGroupSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users_groups')->delete();

    $studentUser = Sentry::getUserProvider()->findByLogin('student@student.com');
    $tutorUser   = Sentry::getUserProvider()->findByLogin('tutor@tutor.com');
    $adminUser   = Sentry::getUserProvider()->findByLogin('admin@admin.com');

    $studentGroup = Sentry::getGroupProvider()->findByName('Students');
    $tutorGroup   = Sentry::getGroupProvider()->findByName('Tutors');
    $adminGroup   = Sentry::getGroupProvider()->findByName('Admins');

      // Assign the groups to the users
      $studentUser->addGroup($studentGroup);
      
      $tutorUser->addGroup($studentGroup);
      $tutorUser->addGroup($tutorGroup);

      $adminUser->addGroup($studentGroup);
      $adminUser->addGroup($tutorGroup);
      $adminUser->addGroup($adminGroup);

      //Asigns all students
      for ($i=0; $i <100 ; $i++) { 
        $user = Sentry::getUserProvider()
                ->findByLogin("student{$i}@student{$i}.com");
        $user->addGroup($studentGroup);
      }

      //Asigns all tutors
      for ($i=0; $i <10 ; $i++) { 
        $user = Sentry::getUserProvider()
                ->findByLogin("tutor{$i}@tutor{$i}.com");
        $user->addGroup($studentGroup);
        $user->addGroup($tutorGroup);
      }
  }

}