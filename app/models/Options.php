<?php

class Option extends \Eloquent {
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'options';
  
	// Add your validation rules here
  public static $rules = [
    'text'  => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["text","question_id"];


  public function question()
  {
    return $this->belongsTo('Question', 'question_id');
  }
}