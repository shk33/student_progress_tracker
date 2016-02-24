<?php

class TakenTest extends \Eloquent {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'taken_tests';
  
	// Add your validation rules here
  public static $rules = [
  ];

  // Don't forget to fill this array
  protected $fillable = ["student_test_id","user_id"];


  public function studentTest()
  {
    return $this->belongsTo('StudentTest', 'student_test_id');
  }

  public function user()
  {
    return $this->belongsTo('User', 'user_id');
  }

}