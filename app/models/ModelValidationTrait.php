<?php 
trait ModelValidationTrait {
    public $errors;

    public function validate($data)
    {
      // make a new validator object
      $v = Validator::make($data, self::getModelRules());

      // check for failure
      if ($v->fails())
      {
          // set errors and return false
          $this->errors = $v->messages();
          return false;
      }

      // validation pass
      return true;
    }

    public static function getModelRules()
    {
      return self::$rules;
    }
}