<?php

class Question extends \Eloquent {
  use ModelValidationTrait;
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'questions';
  
	// Add your validation rules here
  public static $rules = [
    'text'    => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["name","text","student_test_id"];


  public function studentTest()
  {
    return $this->belongsTo('StudentTest', 'student_test_id');
  }

  public function options()
  {
    return $this->hasMany('Option', 'question_id');
  }
}