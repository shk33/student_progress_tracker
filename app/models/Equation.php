<?php

class Equation extends \Eloquent {
	// Add your validation rules here
  public static $rules = [
    'name'    => 'required',
    'content' => 'required',
    'blackboard_id' => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["blackboard_id", "name", "content"];

  public function blackboard()
  {
    return $this->belongsTo('Blackboard');
  }

  public function belongsToBlackboard($blackboard)
  {
    return $this->blackboard->id == $blackboard->id;
  }

}