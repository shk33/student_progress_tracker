<?php
class Group extends \Eloquent {
  // Add your validation rules here
  public static $rules = [];

  // Don't forget to fill this array
  protected $fillable = [];

  private static $STUDENTS_GROUP_NAME = "Students";

  public static function getStudentsGroup($value='')
  {
    $student_group = Group::where('name', Group::$STUDENTS_GROUP_NAME)->first();

    return $student_group;
  }

  public static function getStudents()
  {
    return Group::getStudentsGroup()->users;
  }

  public function users()
  {
    return $this->belongsToMany('User', 'users_groups', 'group_id', 'user_id');
  }

}