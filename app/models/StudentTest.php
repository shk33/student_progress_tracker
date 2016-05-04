<?php

class StudentTest extends \Eloquent {
  use ModelValidationTrait;
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

  public function getTakenTestsOrderedByScore()
  {
    $takenTests = $this->taken_tests;

    foreach ($takenTests as $takenTest) {
      $takenTest->score = $takenTest->getScore();
    }

    return $takenTests->sortByDesc('score')->groupBy('score');
    
  }

  public function countQuestions()
  {
    return $this->questions()->where('text','<>','')->count();
  }

  public function questions(){
    return $this->hasMany('Question', 'student_test_id');
  }

  public function takenTests()
  {
    return $this->hasMany('TakenTest', 'student_test_id');
  }
}