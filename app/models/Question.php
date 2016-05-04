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
    'slide_text'    => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["slide_text","name","text","student_test_id"];


  public function countCorrectTimesAnswered()
  {
    $correctOptionId = $this->getCorrectOption()->id;
    return Answer::where('option_id','=',$correctOptionId)
      ->where('is_correct','=',1)
      ->count();
  }

  public function countTimesAnswered()
  {
    return Answer::where('question_id','=',$this->id)
      ->count();
  }

  public function getOptionByName($name)
  {
    $option = $this->options()->where('name','=',$name)->first();
    return $option != null?$option:new Question(['text' => '', 'is_correct' => false]);
  }

  public function isCorrectOption($option)
  {
    return $this->getCorrectOption()->id == $option->id;
  }

  public function resetAnswers()
  {
    foreach ($this->options as $option) {
      $option->answers()->delete();
    }
  }

  public function getCorrectOption()
  {
    return $this->options()->where('is_correct','=',1)->first();
  }

  /*
  * Relationships
  */

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