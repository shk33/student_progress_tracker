<?php namespace tutor;
class ScholarGroupController extends \BaseController {

  function __construct()
  {
    $this->beforeFilter('isTutorGroupOwner', array('only' => 
          array('show', 
                'edit', 
                'update',
                'destroy',
                'removeStudent',
                'addStudent',
                'storeStudent')));
  }

  /**
   * Display a listing of the resource.
   * GET /scholargroup
   *
   * @return Response
   */
  public function index()
  {
    $user = \Sentry::getUser();
    $user = \User::find($user->id);
    $scholarGroups = $user->getScholarGroupsPaginated();
    return \View::make('tutor/scholar_groups.index',compact('scholarGroups'));
  }

  /**
   * Show the form for creating a new resource.
   * GET /scholargroup/create
   *
   * @return Response
   */
  public function create()
  {
    $userId = \Sentry::getUser()->id;
    return \View::make('tutor/scholar_groups.create', compact('userId'));
  }

  /**
   * Store a newly created resource in storage.
   * POST /scholargroup
   *
   * @return Response
   */
  public function store()
  {
    if (!$this->isCorrectTutor(\Input::all()['user_id'])) {
      return \Redirect::route('tutor.scholar-groups.index');
    }
    
    $validator = \Validator::make(\Input::all(), \ScholarGroup::$rules);
    if ($validator->fails()) {
        $messages = $validator->messages();
        return \Redirect::route('tutor.scholar-groups.create')
            ->withErrors($validator)
            ->withInput(\Input::all());

    } else {
        $scholarGroup = new \ScholarGroup(\Input::all());
        $scholarGroup->save();
        \Session::flash('success', 'Grupo Creador exitósamente');
        return \Redirect::route('tutor.scholar-groups.index');
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
    $scholarGroup = \ScholarGroup::find($id);
    $students     = $scholarGroup->users;
    return \View::make('admin/scholar_groups.show',compact('scholarGroup','students'));

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
    $scholarGroup = \ScholarGroup::find($id);
    $userId = \Sentry::getUser()->id;
    return \View::make('tutor/scholar_groups.edit',compact('scholarGroup','userId'));
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
    $scholarGroup = \ScholarGroup::find($id);
    $userId = \Sentry::getUser()->id;
    if ($this->isCorrectTutor(\Input::all()['user_id'])) {
      $validator = \Validator::make(\Input::all(), \ScholarGroup::$rules);
      if ($validator->fails()) {
          $messages = $validator->messages();
          return \Redirect::route('tutor.scholar-groups.edit', $scholarGroup->id)
              ->withErrors($validator)
              ->withInput(\Input::all());

      } else {
          $scholarGroup->update(\Input::all());
          \Session::flash('success', 'Grupo editado exitósamente');
          return \Redirect::route('tutor.scholar-groups.index');
      }
    }

    return \Redirect::route('tutor.scholar-groups.index');
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
    $scholarGroup = \ScholarGroup::find($id);
    $scholarGroup->delete();
    \Session::flash('success', 'Grupo Eliminado');
    return \Redirect::route('tutor.scholar-groups.index');
  }

  /**
   * Remove the student from scholar group.
   * DELETE /scholargroup/{id}/student/{studen_id}
   *
   * @param  int  $id, int student_id
   * @return Response
   */
  public function removeStudent($id, $student_id)
  {
    $scholarGroup = \ScholarGroup::find($id);
    $scholarGroup->users()->detach($student_id);
    \Session::flash('success', 'El alumno fue removido del grupo');
    return \Redirect::route('tutor.scholar-groups.show', $scholarGroup->id);
  }

  /**
   * Show the table for adding new student at this Group.
   * GET /scholargroup/{id}/add-students
   *
   * @return Response
   */
  public function addStudent($id)
  {
    $scholarGroup = \ScholarGroup::find($id);
    $students = $scholarGroup->getStudentsNotInGroup();
    return \View::make('tutor/scholar_groups/add-student', 
                        compact('scholarGroup', 'students'));
  }

  /**
   * Attach a new student to group.
   * POST /scholargroup/{$id}/store-student/{student_id}
   *
   * @return Response
   */
  public function storeStudent($id, $student_id)
  {
    $scholarGroup = \ScholarGroup::find($id);
    $scholarGroup->users()->attach($student_id);
    return \Redirect::route('tutor.scholar-groups.add-student', $id);
    
  }


  private function isCorrectTutor($tutorId)
  {
    $userId = \Sentry::getUser()->id;
    return  $userId == $tutorId;
  }

}