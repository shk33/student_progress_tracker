<?php namespace tutor;

class QuestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /test
	 *	 * @return Response
	 */
	public function index($id)
	{
		$test = \StudentTest::find($id);
		$questions = \Question::paginate(10);
    return \View::make('tutor.questions.index',compact('questions','test'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /test/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$test = \StudentTest::find($id);
		return \View::make('tutor.questions.create',compact('test'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /test
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$question = new \Question();

		// attempt validation
		if ($question->validate(\Input::all())) {
			$question->fill(\Input::all());
			$question->save();

			$optionA = ['text' => \Input::get('optionA'),'name' => 'A', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'A'];
			$optionB = ['text' => \Input::get('optionB'),'name' => 'B', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'B'];
			$optionC = ['text' => \Input::get('optionC'),'name' => 'C', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'C'];

			$options = [$optionA, $optionB, $optionC];

			foreach ($options as $option) {
				if ($option['text']) {
					$opt = \Option::create($option);
				}
			}

			return \Redirect::route('tutor.tests.questions.index',$id)
				->with('success', 'Pregunta Creada exitósamente');
		}
		else {
			return \Redirect::route('tutor.tests.questions.create',$id)
				->with('error','Ocurrió un error. Favor de Llenar todos los campos obligatorios')
				->withErrors($question->errors);
		}

	}

	/**
	 * Display the specified resource.
	 * GET /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$test = \Question::find($id);
		return \View::make('tutor.questions.show', compact('test'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /test/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, $question_id)
	{
		$test     = \StudentTest::find($id);
		$question = \Question::find($question_id);
		return \View::make('tutor.questions.edit', compact('test','question'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, $question_id)
	{
		$question = \Question::find($question_id);

		if ($question->validate(\Input::all())) {
			$question->fill(\Input::all());
			$question->save();

			$optionA = ['text' => \Input::get('optionA'),'name' => 'A', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'A'];
			$optionB = ['text' => \Input::get('optionB'),'name' => 'B', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'B'];
			$optionC = ['text' => \Input::get('optionC'),'name' => 'C', 'question_id' => $question->id, 'is_correct' => \Input::get('option_correct') == 'C'];

			$options = ['A' =>$optionA, 'B' => $optionB, 'C' => $optionC];

			foreach ($options as $name => $option) {
				if ($question->hasOptionByName($name)) {
					// Filling an option with ''  means it will be deleted
					if (!$option['text']) {
						$opt = $question->getOptionByName($name);
						$opt->delete();
						continue;
					}
					// Not an empty text means it will updated
					$opt = $question->getOptionByName($name);
					$opt->fill($option);
					$opt->fill(['question_id' => $question_id]);
					$opt->save();
				} else {
					// The options does not exist so it creates a new one
					$opt = new \Option();
					$opt->fill($option);
					$opt->fill(['question_id' => $question_id]);
					$opt->save();
				}
				
			}
			
			return \Redirect::route('tutor.tests.questions.index',$id)
				->with('success', 'Pregunta Editada exitósamente');
		}
		else {
			return \Redirect::route('tutor.tests.questions.edit',$id,$question_id)
				->with('error','Ocurrió un error. Favor de Llenar todos los campos obligatorios')
				->withErrors($question->errors);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /test/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, $question_id)
	{
		$question = \Question::find($question_id);
	  $question->delete();

		return \Redirect::route('tutor.tests.questions.index',$id)
			->with('success', 'Pregunta eliminado exitósamente');
	}

}