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


  public function getOptionByName($name)
  {
    $option = $this->options()->where('name','=',$name)->first();
    return $option != null?$option:new Question(['text' => '', 'is_correct' => false]);
  }

  public function isCorrectOption($option)
  {
    return $this->getCorrectOption()->id == $option->id;
  }

  public function getCorrectOption()
  {
    return $this->options()->where('is_correct','=',1)->first();
  }

  public function hasOptionByName($name)
  {
    return $this->options()->where('name','=',$name)->first() != null;
  }

  public function studentTest()
  {
    return $this->belongsTo('StudentTest', 'student_test_id');
  }

  public function options()
  {
    return $this->hasMany('Option', 'question_id');
  }
}