<?php

class Blackboard extends \Eloquent {
	// Add your validation rules here
  public static $rules = [
    'scholar_group_id' => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["scholar_group_id"];

  public function scholarGroup()
  {
    return $this->belongsTo('ScholarGroup');
  }

  public function equations() {
    return $this->hasMany("Equation");
  }


}