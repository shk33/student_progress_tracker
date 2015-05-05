<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));

# Tutors Controller
Route::group(['before' => 'auth|adminGroup'], function()
{
  Route::resource('tutors', 'TutorsController');
});

# Students Controller
Route::group(['before' => 'auth|adminOrTutorGroup'], function()
{
  Route::resource('students', 'StudentsController');
});


//Admin Routes
Route::group(array('prefix' => 'admin', 'namespace' => 'admin'), function()
{
  Route::group(['before' => 'auth|adminGroup'], function()
  {
    // Scholar Groups Routes
    Route::delete('scholar-groups/{id}/student/{student_id}', array(
       'as' => 'admin.scholar-groups.remove-student', 
       'uses' => 'ScholarGroupController@removeStudent'));

    Route::get('scholar-groups/{id}/add-students', array(
       'as' => 'admin.scholar-groups.add-student', 
       'uses' => 'ScholarGroupController@addStudent'));

    Route::post('scholar-groups/{id}/store-students/{student_id}', array(
       'as' => 'admin.scholar-groups.store-student', 
       'uses' => 'ScholarGroupController@storeStudent'));

    Route::resource('scholar-groups', 'ScholarGroupController');

    // Blackboards Routes
    Route::resource('scholar-groups.blackboards', 'BlackboardController',
      ['only' => ['show']]);

    //Equations
    Route::resource('blackboards.equations', 'EquationsController',
      ['except' => ['index']]);
  });

});

//Tutor Routes
Route::group(array('prefix' => 'tutor', 'namespace' => 'tutor'), function()
{
  # Scholar Groups Controller
  Route::group(['before' => 'auth|tutorGroup'], function()
  {
    Route::delete('scholar-groups/{id}/student/{student_id}', array(
       'as' => 'tutor.scholar-groups.remove-student', 
       'uses' => 'ScholarGroupController@removeStudent'));

    Route::get('scholar-groups/{id}/add-students', array(
       'as' => 'tutor.scholar-groups.add-student', 
       'uses' => 'ScholarGroupController@addStudent'));

    Route::post('scholar-groups/{id}/store-students/{student_id}', array(
       'as' => 'tutor.scholar-groups.store-student', 
       'uses' => 'ScholarGroupController@storeStudent'));

    Route::resource('scholar-groups', 'ScholarGroupController');
  });

});
