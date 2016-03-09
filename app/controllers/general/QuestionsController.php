<?php namespace general;

class QuestionsController extends \BaseController {

	/**
	 * GET 
	 *
	 * @return Response
	 */
	public function show($takenTestId, $questionIndex)
	{
		$takenTest = \TakenTest::find($takenTestId);
		$test      = $takenTest->student_test;
		$question  = $test->questions[$questionIndex -1];

		return \View::make('general.taken-tests.show',
						compact('test','takenTest','question','questionIndex'));
	}

}