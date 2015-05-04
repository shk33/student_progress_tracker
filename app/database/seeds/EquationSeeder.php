<?php

class EquationSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('equations')->delete();

    $blackboards = Blackboard::all();

    foreach ($blackboards as $blackboard) {
      for ($i=0; $i < 5 ; $i++) { 
        Equation::create(array(
            'name'    => "Ecuación $i",
            'content' => "4Y = X +1",
            'blackboard_id' => $blackboard->id
        ));     
      }
    }
  }
}