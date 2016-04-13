<?php namespace tutor;

class StudentTestsController extends \BaseController {

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
	public function create()
	{
		return \View::make('tutor.tests.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /test
	 *
	 * @return Response
	 */
	public function store()
	{
		$test = new \StudentTest();

		// attempt validation
		if ($test->validate(\Input::all())) {
			$test->fill(\Input::all());
			$test->type = 'Image';
			$test->save();

			// Upload Image
			if(\Input::file('presentation')){
        $presentation = \Input::file('presentation');
        $filename   = time() . '.' . $presentation->getClientOriginalExtension();
        $presentations_folder_path = public_path('tests/presentations/');
        $presentation->move($presentations_folder_path, $filename);

        $presentation_path = 'tests/presentations/' . $filename;
        $test->presentation = $presentation_path;
        $test->save();
      }

			return \Redirect::route('tutor.tests.index')
				->with('success', 'Prueba Creada exitósamente');
		}
		else {
			return \Redirect::route('tutor.tests.create')
				->with('error','Ocurrió un error. Favor de Llenar todos los campos obligatorios')
				->withErrors($test->errors);
		}

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
	 * Display the specified resource.
	 * GET /test/{id}/activate
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function stats($id)
	{
		$test = \StudentTest::find($id);
		$takenTests = $test->getTakenTestsOrderedByScore();
		$maxScore   = $test->questions()->count();

		return \View::make('tutor.tests.stats',
						compact('takenTest','test','takenTests','maxScore'));
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