<?php

class Question extends \Eloquent {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'questions';
  
	// Add your validation rules here
  public static $rules = [
    'name'    => 'required',
    'text'    => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["name","text","test_id"];


  public function studentTest()
  {
    return $this->belongsTo('StudentTest', 'student_test_id');
  }
}