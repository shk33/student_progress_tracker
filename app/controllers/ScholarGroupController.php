<?php

class ScholarGroupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /scholargroup
	 *
	 * @return Response
	 */
	public function index()
	{
		$scholarGroups = ScholarGroup::paginate(10);
		return View::make('scholar_groups.index',compact('scholarGroups'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /scholargroup/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /scholargroup
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
		//
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
		//
	}

}