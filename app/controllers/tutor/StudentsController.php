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
				->with('success', 'Estudiante Creador exitósamente');
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
		$user = \Sentry::findUserById($id);
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
		$user = \Sentry::findUserById($id);
		if (\User::updateAttributes($user,\Input::all())) {
			\Session::flash('success', 'Estudiante actualizado exitósamente');
			return \Redirect::route('tutor.students.index');
		}else{
			\Session::flash('error', 'Ocurrió un error. Valida los datos.');
			return \Redirect::route('tutor.students.edit', $id);
		}
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