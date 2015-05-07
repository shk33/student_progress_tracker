<?php namespace tutor;

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
		return \View::make('tutor.my_files.index',compact('blackboard', 'myFiles'));
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
		return \View::make('tutor.my_files.create', compact('blackboard'));
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
		$myFile = new \MyFile(\Input::all());
		$blackboard->myFiles()->save($myFile);
		\Session::flash('success', 'Archivo subido exitósamente');
    return \Redirect::route('tutor.blackboards.my-files.index', $blackboard->id);
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
		$myFile = \MyFile::find($id);
		$myFile->attachment = STAPLER_NULL;
		$myFile->save();
		$myFile->delete();
		\Session::flash('success', 'Archivo Eliminado');
    return \Redirect::route('tutor.blackboards.my-files.index', $blackboardId);
	}

}