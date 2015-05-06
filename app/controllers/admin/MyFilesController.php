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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /files
	 *
	 * @return Response
	 */
	public function store($blackboardId)
	{
		//
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