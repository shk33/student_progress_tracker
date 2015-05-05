<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
  if (!Sentry::check()) return Redirect::guest('login');
});

Route::filter('adminGroup', function()
{
  $user = Sentry::getUser();
  $admin = Sentry::findGroupByName('Admins');

  if (!$user->inGroup($admin)) 
    return Redirect::to('login');
});

Route::filter('tutorGroup', function()
{
  $user = Sentry::getUser();
  $admin = Sentry::findGroupByName('Tutors');

  if (!$user->inGroup($admin)) 
    return Redirect::to('login');
});

Route::filter('adminOrTutorGroup', function()
{
  $user = Sentry::getUser();
  $admin = Sentry::findGroupByName('Admins');
  $tutor = Sentry::findGroupByName('Tutors');

  if (!$user->inGroup($admin) && !$user->inGroup($tutor)) 
    return Redirect::to('login');
});

Route::filter('isTutorGroupOwner', function()
{
  $scholarGroup = \ScholarGroup::find((int)Request::segment(3));
  $userId = \Sentry::getUser()->id;
  if (!$scholarGroup->isUserOwner($userId)) {
    return Redirect::route('tutor.scholar-groups.index');
  }
});

Route::filter('isTutorBlackboardOwner', function()
{
  $blackboard = \Blackboard::find((int)Request::segment(3));
  $userId = \Sentry::getUser()->id;
  if (!$blackboard->isUserOwner($userId)) {
    return Redirect::route('tutor.scholar-groups.index');
  }
});

Route::filter('correctBlackboard', function()
{
  $scholarGroup = \ScholarGroup::find((int)Request::segment(3));
  $blackboard   = \Blackboard::find((int)Request::segment(5));
  if (!$scholarGroup->isItsBlackboard($blackboard)) {
    return Redirect::route('home');
  }
});

Route::filter('correctEquation', function()
{
  $blackboard = \Blackboard::find((int)Request::segment(3));
  $equation   = \Equation::find((int)Request::segment(5));
  if (!$equation->belongsToBlackboard($blackboard)) {
    return Redirect::route('home');
  }
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
