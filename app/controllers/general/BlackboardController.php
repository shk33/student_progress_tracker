<?php namespace general;

class BlackboardController extends \BaseController {

	/**
	 * Display the specified resource.
	 * GET /blackboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blackboard = \Blackboard::find($id);
		$equations  = $blackboard->equations;
		return \View::make('general.blackboards.show',
			     compact('blackboard','equations'));
	}

}