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

	public function answer($takenTestId, $questionIndex)
	{
		$takenTest = \TakenTest::find($takenTestId);
		$test      = $takenTest->student_test;
		$question  = $test->questions[$questionIndex -1];

		$selectedOption = \Option::find(\Input::get("question_$questionIndex"));

		$answer = $takenTest->getAnsweredQuestion($question);

		if ($answer) {
			// Update Answer
			$answer->fill([
				'option_id'     => $selectedOption->id,
				'is_correct'    => $question->isCorrectOption($selectedOption),
				]);
			$answer->save();
		} else {
			// Create answer
			$answer = \Answer::create([
				'taken_test_id' => $takenTest->id,
				'option_id'     => $selectedOption->id,
				'question_id'   => $question->id,
				'is_correct'    => $question->isCorrectOption($selectedOption),
				]);
		}


		return \Redirect::route('general.taken-tests.questions.show',[$takenTest->id, $questionIndex + 1]);
	}

}