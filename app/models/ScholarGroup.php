<?php

class ScholarGroup extends \Eloquent {
	// Add your validation rules here
  public static $rules = [
    'name'    => 'required',
    'user_id' => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ['id', 'name', 'description', 'user_id'];

  public function user()
  {
    return $this->belongsTo('User');
  }
}