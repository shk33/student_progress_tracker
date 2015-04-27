<?php namespace tutor;
class ScholarGroupController extends \BaseController {

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
    $scholarGroup = \ScholarGroup::find($id);
    $userId = \Sentry::getUser()->id;
    if ($scholarGroup->isUserOwner($userId)) {
      return \View::make('tutor/scholar_groups.edit',compact('scholarGroup','userId'));
    }
    return \Redirect::route('tutor.scholar-groups.index');
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
    if ($scholarGroup->isUserOwner($userId) && $this->isCorrectTutor(\Input::all()['user_id'])) {
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
    $userId = \Sentry::getUser()->id;
    if ($scholarGroup->isUserOwner($userId)) {
      $scholarGroup->delete();
      \Session::flash('success', 'Grupo Eliminado');
    }
      return \Redirect::route('tutor.scholar-groups.index');
  }


  private function isCorrectTutor($tutorId)
  {
    $userId = \Sentry::getUser()->id;
    return  $userId == $tutorId;
  }

}