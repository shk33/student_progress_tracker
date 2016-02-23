<?php namespace tutor;

class StudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /students
	 *	 * @return Response
	 */
	public function index()
	{
		$users = \User::getStudents()->paginate(10);
    return \View::make('tutor.students.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /students/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('tutor.students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /students
	 *
	 * @return Response
	 */
	public function store()
	{
		$student = new \User();

		// attempt validation
		if ($student->validate(\Input::all())) {
			$student->fill(\Input::all());
			$student->role_id = \Role::getStudentRole()->id;
			$student->save();

			return \Redirect::route('tutor.students.index')
				->with('success', 'Estudiante Creado exitósamente');
		}
		else {
			return \Redirect::route('tutor.students.create')
				->with('error','Ocurrió un error. Favor de Llenar todos los campos obligatorios')
				->withErrors($student->errors);
		}

	}

	/**
	 * Display the specified resource.
	 * GET /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = \User::find($id);
		return \View::make('tutor.students.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /students/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = \User::find($id);
		return \View::make('tutor.students.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user      = \User::find($id);
		$validator  = \Validator::make(\Input::all(), \User::getUpdateRules($id));

		if ($validator->fails()) {
		    return \Redirect::route('tutor.students.edit', $id)
		    	->with('error','Ocurrió un Error. Valida los datos')
		    	->withErrors($validator->messages());
		}

		$user->fill(\Input::all());
		$user->save();

		return \Redirect::route('tutor.students.index')
			->with('success','Estudiante actualizado exitósamente');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /students/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			$user = \Sentry::findUserById($id);
		  $user->delete();
		  \Session::flash('success', 'Estudiante eliminado exitósamente');
		}
		catch (\Cartalyst\Sentry\Users\UserNotFoundException $e){
			\Session::flash('error', 'Estudiante no encontrado');
		}
		finally{
			return \Redirect::route('tutor.students.index');
		}
	}

}