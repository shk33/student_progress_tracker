<?php namespace general;

class TakenTestsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /test/create
	 *
	 * @return Response
	 */
	public function show($id,$takenTestId)
	{
		$test      = \StudentTest::find($id);
		$takenTest = \TakenTest::find($takenTestId);
		$questionIndex = 1;
		$question  = $test->questions[$questionIndex -1];

		return \View::make('general.taken-tests.show',
						compact('test','takenTest','question','questionIndex'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /test
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$user = \Auth::user();
		$takenTest = $user->findTakenTest($id);

		if (!$takenTest) {
			$takenTest = \TakenTest::create(["student_test_id" => $id, "user_id" => $user->id]);
		}

		return \Redirect::route('general.taken-tests.questions.show',[$takenTest->id, 1])
						->with('success', 'Prueba Iniciada');

	}

}