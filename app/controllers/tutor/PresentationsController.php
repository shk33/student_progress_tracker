<?php namespace tutor;

class PresentationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /test
	 *	 * @return Response
	 */
	public function index($id)
	{
		$test = \StudentTest::find($id);
		$questions = $test->questions()->paginate(10);
    return \View::make('tutor.tests.questions.index',compact('questions','test'));
	}

	/**
	 * Display the specified resource.
	 * GET /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($testId, $questionIndex)
	{
		$test = \StudentTest::find($testId);
		if ($questionIndex > $test->questions()->count() ) {
			return \Redirect::route('general.taken-tests.completed',$takenTestId)
							->with('success','Examen Completado');
		}
		
		$question  = $test->questions[$questionIndex -1];
		return \View::make('tutor.tests.presentations.show', compact('test','question','questionIndex'));
	}

}