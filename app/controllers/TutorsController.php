<?php

class TutorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tutors
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::getTutors()->paginate(10);
		return View::make('tutors.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tutors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tutors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tutors
	 *
	 * @return Response
	 */
	public function store()
	{		
		if (User::createTutor(Input::all())) {
			Session::flash('success', 'Tutor Creador exitósamente');
			return Redirect::route('tutors.index');
		}else{
			Session::flash('error', 'Ocurrió un error. Valida los datos.');
			return View::make('tutors.create');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /tutors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tutors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tutors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tutors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}