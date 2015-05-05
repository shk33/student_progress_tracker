<?php namespace admin;

class EquationsController extends \BaseController {

	function __construct()
  {
    $this->beforeFilter('correctEquation', array('only' => 
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
	public function create($blackboard_id)
	{
		$blackboard = \Blackboard::find($blackboard_id);
		return \View::make('admin.equations.create',compact('blackboard'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /equations
	 *
	 * @return Response
	 */
	public function store($blackboard_id)
	{
		$validator = \Validator::make(\Input::all(), \Equation::$rules);
		if ($validator->fails()) {
        $messages = $validator->messages();
        return \Redirect::route('admin.blackboards.equations.create', $blackboard_id)
            ->withErrors($validator)
            ->withInput(\Input::all());

    } else {
        $blackboard = \Blackboard::find($blackboard_id);
        $equation   = new \Equation(\Input::all());

        $blackboard->equations()->save($equation);
        \Session::flash('success', 'Ecuación Creado exitósamente');

        return \Redirect::route('admin.scholar-groups.blackboards.show',
    	                    [$blackboard_id, $blackboard->scholarGroup->id] );
    }

	}

	/**
	 * Display the specified resource.
	 * GET /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blackboard_id, $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /equations/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($blackboard_id, $id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($blackboard_id, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /equations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($blackboard_id, $id)
	{
		$blackboard = \Blackboard::find($blackboard_id);
		$equation = \Equation::find($id);

    $equation->delete();
    \Session::flash('success', 'Ecuación Eliminada');

    return \Redirect::route('admin.scholar-groups.blackboards.show',
    	[$blackboard_id, $blackboard->scholarGroup->id] );
	}

}