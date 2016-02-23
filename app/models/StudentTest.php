<?php

class StudentTest extends \Eloquent {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'student_tests';
  
	// Add your validation rules here
  public static $rules = [
    'name'    => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["name","type"];

  public function questions(){
    return $this->hasMany('Question', 'student_test_id');
  }
}