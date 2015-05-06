<?php namespace admin;

class MyFilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /files
	 *
	 * @return Response
	 */
	public function index($blackboardId)
	{
		$blackboard = \Blackboard::find($blackboardId);
		$myFiles = $blackboard->myFiles;
		return \View::make('admin.my_files.index',compact('blackboard', 'myFiles'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /files/create
	 *
	 * @return Response
	 */
	public function create($blackboardId)
	{
		$blackboard = \Blackboard::find($blackboardId);
		return \View::make('admin.my_files.create', compact('blackboard'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /files
	 *
	 * @return Response
	 */
	public function store($blackboardId)
	{
		$blackboard = \Blackboard::find($blackboardId);
		$myFile = \MyFile(\Input::all());
		$blackboard->myFiles()->attach($myFile);
		\Session::flash('success', 'Archivo subido exitósamente');
    return \Redirect::route('admin.blackboards.my-files.index', $blackboard->id);
	}

	/**
	 * Display the specified resource.
	 * GET /files/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blackboardId,$id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /files/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($blackboardId,$id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /files/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($blackboardId,$id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /files/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($blackboardId,$id)
	{
		//
	}

}