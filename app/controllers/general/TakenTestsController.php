<?php namespace general;

class TakenTestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /test
	 *	 * @return Response
	 */
	public function index()
	{
		$tests = \StudentTest::paginate(10);
    return \View::make('tutor.tests.index',compact('tests'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /test/create
	 *
	 * @return Response
	 */
	public function show($id,$takenTestId)
	{
		$test      = \StudentTest::find($id);
		$takenTest = \TakenTest::find($takenTestId);
		$questionIndex = 1;
		$question  = $test->questions[$questionIndex -1];

		return \View::make('general.taken-tests.show',
						compact('test','takenTest','question','questionIndex'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /test
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$user      = \Auth::user();
		$takenTest = \TakenTest::create(["student_test_id" => $id, "user_id" => $user->id]);

		return \Redirect::route('general.tests.taken-tests.show',[$id,$takenTest->id])
						->with('success', 'Prueba Iniciada');

	}

	/**
	 * Display the specified resource.
	 * GET /test/{id}/activate
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function activate($id)
	{
		$test = \StudentTest::find($id);
		$test->is_active = true;
		$test->save();
		return \Redirect::route('tutor.tests.index')
			->with('success','Examen Activado');
	}

	/**
	 * Display the specified resource.
	 * GET /test/{id}/activate
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deactivate($id)
	{
		$test = \StudentTest::find($id);
		$test->is_active = false;
		$test->save();
		return \Redirect::route('tutor.tests.index')
			->with('success','Examen Desactivado');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /test/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$test = \StudentTest::find($id);
		return \View::make('tutor.tests.edit', compact('test'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$test = \StudentTest::find($id);

		if ($test->validate(\Input::all())) {
			$test->fill(\Input::all());
			$test->type = 'Image';
			$test->save();

			return \Redirect::route('tutor.tests.index')
				->with('success', 'Prueba Editada exitósamente');
		}
		else {
			return \Redirect::route('tutor.tests.create')
				->with('error','Ocurrió un error. Favor de Llenar todos los campos obligatorios')
				->withErrors($test->errors);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$StudentTest = \StudentTest::find($id);
	  $StudentTest->delete();

		return \Redirect::route('tutor.tests.index')
			->with('success', 'Examen eliminado exitósamente');
	}

}