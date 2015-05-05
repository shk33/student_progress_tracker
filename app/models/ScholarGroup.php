<?php

class ScholarGroup extends \Eloquent {
	// Add your validation rules here
  public static $rules = [
    'name'    => 'required',
    'user_id' => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ['id', 'name', 'description', 'user_id'];

  public static function boot()
  {
      parent::boot();

      ScholarGroup::created(function($scholarGroup)
      {
        $blackboard = new \Blackboard();
        $scholarGroup->blackboard()->save($blackboard);
      });
  }

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function users() {
    return $this->belongsToMany('User', 'scholar_groups_users', 'scholar_group_id', 'user_id');
  }

  public function blackboard() {
    return $this->hasOne("Blackboard");
  }

  public function isUserOwner($userId)
  {
    return $this->user->id == $userId;
  }

  public function isItsBlackboard($blackboard)
  {
    return $this->blackboard->id == $blackboard->id;
  }

  public function getStudentsNotInGroup()
  {
    $studentsNotInGroup = Group::getStudents()->diff($this->users); 
    return $studentsNotInGroup;
  }
}