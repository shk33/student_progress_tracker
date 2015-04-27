<?php
class AdminScholarGroupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /scholargroup
	 *
	 * @return Response
	 */
	public function index()
	{
		$scholarGroups = ScholarGroup::paginate(10);
		return View::make('admin/scholar_groups.index',compact('scholarGroups'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /scholargroup/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$tutors = $this->createTutorsArray();
		return View::make('admin/scholar_groups.create',compact('tutors'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /scholargroup
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), ScholarGroup::$rules);
		if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::route('admin.scholar-groups.create')
            ->withErrors($validator)
            ->withInput(Input::all());

    } else {
        $scholarGroup = new ScholarGroup(Input::all());
        $scholarGroup->save();
        Session::flash('success', 'Grupo Creador exitósamente');
        return Redirect::route('admin.scholar-groups.index');
    }
	}

	/**
	 * Display the specified resource.
	 * GET /scholargroup/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /scholargroup/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$scholarGroup = ScholarGroup::find($id);
		$tutors = $this->createTutorsArray();
		return View::make('admin/scholar_groups.edit',compact('scholarGroup','tutors'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /scholargroup/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$scholarGroup = ScholarGroup::find($id);
		$validator = Validator::make(Input::all(), ScholarGroup::$rules);
		if ($validator->fails()) {
        $messages = $validator->messages();
        return Redirect::route('admin.scholar-groups.edit', $scholarGroup->id)
            ->withErrors($validator)
            ->withInput(Input::all());

    } else {
    		$scholarGroup->update(Input::all());
        Session::flash('success', 'Grupo editado exitósamente');
        return Redirect::route('admin.scholar-groups.index');
    }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /scholargroup/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function createTutorsArray()
	{
		//That 1000 is horrible i know
		$users = User::getTutors()->paginate(1000);
		$tutors = [];
		foreach ($users as $user) {
			$tutors[$user->id] = "$user->first_name $user->last_name";
		}
		return $tutors;
	}

}