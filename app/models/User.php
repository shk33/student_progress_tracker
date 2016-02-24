<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, ModelValidationTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	// Add your validation rules here
  public static $rules = [
  	'first_name' => 'required',
  	'last_name'  => 'required',
  	'username'   => 'required|unique:users,username',
  	'email'      => 'email',
    'password'   => 'required|confirmed',
  ];


  // Don't forget to fill this array
  protected $fillable = ['email','password','first_name','last_name','username','enrollment_number','role_id'];

	public static function getStudents()
	{
		return User::where('role_id','=',Role::getStudentRole()->id);
	}

  public static function getUpdateRules($id)
  {
    return [
      'first_name' => 'required',
      'last_name'  => 'required',
      'username'   => 'required|unique:users,username,'.$id,
      'email'      => 'email',
    ];
  }

	public function role(){
		return $this->belongsTo('Role', 'role_id');
	}

  public function takenTests(){
    return $this->hasMany('TakenTest', 'user_id');
  }
}
