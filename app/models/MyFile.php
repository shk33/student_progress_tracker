<?php
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class MyFile extends \Eloquent implements StaplerableInterface {
  use EloquentTrait;
  // Add your validation rules here
  public static $rules = [
    'blackboard_id' => 'required',
  ];

  // Don't forget to fill this array
  protected $fillable = ["blackboard_id", "attachment"];

  public function __construct(array $attributes = array()) {
    $this->hasAttachedFile('attachment');
    parent::__construct($attributes);
  }

  public function blackboard()
  {
    return $this->belongsTo('Blackboard');
  }

}