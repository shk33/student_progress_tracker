<?php

class Answer extends \Eloquent {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'answers';
  
	// Add your validation rules here
  public static $rules = [
  ];

  // Don't forget to fill this array
  protected $fillable = ["taken_test_id_id","option_id"];


  public function selectedOption()
  {
    return $this->belongsTo('Option', 'option_id');
  }

  public function takenTest()
  {
    return $this->belongsTo('TakenTest', 'taken_test_id');
  }

}