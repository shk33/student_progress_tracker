<?php

class Role extends \Eloquent {
	// Add your validation rules here
  public static $rules = [];

  // Don't forget to fill this array
  protected $fillable = ['name'];

  const TEACHER_ROLE = 'Teacher'; 
  const STUDENT_ROLE = 'Student'; 

  /******** Static Methods **********/
  public static function getTeacherRole()
  {
    return Role::where('name','=',Role::TEACHER_ROLE)->get()->first();
  }

  public static function getStudentRole()
  {
    return Role::where('name','=',Role::STUDENT_ROLE)->get()->first();
  }

}