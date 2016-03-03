<?php namespace general;

class StudentTestsController extends \BaseController {

	/**
	 * Display the specified resource.
	 * GET /blackboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function index()
	{
		$tests = \StudentTest::where('is_active','=','1')->get();
    return \View::make('general.tests.index',compact('tests'));
	}

}