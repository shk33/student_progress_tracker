<?php

class StudentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /students
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::getStudents()->paginate(10);
    $viewParams = array('userType' => 'students');
    return View::make('students.index',compact('users'))->with($viewParams);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /students/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('students.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /students
	 *
	 * @return Response
	 */
	public function store()
	{
		if (User::createStudent(Input::all())) {
			Session::flash('success', 'Estudiante Creador exitósamente');
			return Redirect::route('students.index');
		}else{
			Session::flash('error', 'Ocurrió un error. Valida los datos.');
			return View::make('students.create');
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
		$user = User::find($id);
		return View::make('students.show', compact('user'));
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
		$user = Sentry::findUserById($id);
		return View::make('students.edit', compact('user'));
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
		$user = Sentry::findUserById($id);
		if (User::updateAttributes($user,Input::all())) {
			Session::flash('success', 'Estudiante actualizado exitósamente');
			return Redirect::route('students.index');
		}else{
			Session::flash('error', 'Ocurrió un error. Valida los datos.');
			return Redirect::route('students.edit', $id);
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
			$user = Sentry::findUserById($id);
		  $user->delete();
		  Session::flash('success', 'Estudiante eliminado exitósamente');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
			Session::flash('error', 'Estudiante no encontrado');
		}
		finally{
			return Redirect::route('students.index');
		}
	}

}