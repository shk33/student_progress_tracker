<?php namespace tutor;

class EquationsController extends \BaseController {

	function __construct()
  {
    $this->beforeFilter('correctEquation', array('only' => 
          array('edit', 
                'update',
                'destroy')));

    $this->beforeFilter('isTutorBlackboardOwner', array('only' => 
          array('edit', 
                'update',
                'destroy')));
  }

	/**
	 * Show the form for creating a new resource.
	 * GET /equations/create
	 *
	 * @return Response
	 */
	public function create($blackboardId)
	{
		$blackboard = \Blackboard::find($blackboardId);
		return \View::make('tutor.equations.create',compact('blackboard'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /equations
	 *
	 * @return Response
	 */
	public function store($blackboardId)
	{
		$validator = \Validator::make(\Input::all(), \Equation::$rules);
		if ($validator->fails()) {
        $messages = $validator->messages();
        return \Redirect::route('tutor.blackboards.equations.create', $blackboardId)
            ->withErrors($validator)
            ->withInput(\Input::all());

    } else {
        $blackboard = \Blackboard::find($blackboardId);
        $equation   = new \Equation(\Input::all());

        $blackboard->equations()->save($equation);
        \Session::flash('success', 'Ecuación Creado exitósamente');

        return \Redirect::route('tutor.scholar-groups.blackboards.show',
    	                    [$blackboardId, $blackboard->scholarGroup->id] );
    }

	}

	/**
	 * Display the specified resource.
	 * GET /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blackboardId, $id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /equations/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($blackboardId, $id)
	{
		$blackboard = \Blackboard::find($blackboardId);
    $equation   = \Equation::find($id);
    return \View::make('tutor.equations.edit',
    	     compact('blackboard','equation'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($blackboardId, $id)
	{
		$validator = \Validator::make(\Input::all(), \Equation::$rules);
		if ($validator->fails()) {
        $messages = $validator->messages();
        return \Redirect::route('tutor.blackboards.equations.edit', [$blackboardId, $id])
            ->withErrors($validator)
            ->withInput(\Input::all());

    } else {
				$equation = \Equation::find($id);
				$blackboard = \Blackboard::find($blackboardId);
    		$equation->update(\Input::all());
        \Session::flash('success', 'Ecuación editado exitósamente');
        return \Redirect::route('tutor.scholar-groups.blackboards.show',
    	                    [$blackboardId, $blackboard->scholarGroup->id] );
    }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($blackboardId, $id)
	{
		$blackboard = \Blackboard::find($blackboardId);
		$equation = \Equation::find($id);

    $equation->delete();
    \Session::flash('success', 'Ecuación Eliminada');

    return \Redirect::route('tutor.scholar-groups.blackboards.show',
    	[$blackboardId, $blackboard->scholarGroup->id] );
	}

}