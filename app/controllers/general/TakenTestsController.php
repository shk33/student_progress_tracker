<?php namespace general;

class TakenTestsController extends \BaseController {

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