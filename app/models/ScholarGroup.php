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

  public function users() {
    return $this->belongsToMany('User', 'scholar_groups_users', 'scholar_group_id', 'user_id');
  }

  public function isUserOwner($userId)
  {
    return $this->user->id == $userId;
  }
}