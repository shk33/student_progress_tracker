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
  # Scholar Groups Controller
  Route::group(['before' => 'auth|adminGroup'], function()
  {
    Route::delete('scholar-groups/{id}/student/{student_id}', array(
       'as' => 'admin.scholar-groups.remove-student', 
       'uses' => 'ScholarGroupController@remove_student'));
    Route::get('scholar-groups/{id}/add-students', array(
       'as' => 'admin.scholar-groups.add-student', 
       'uses' => 'ScholarGroupController@add_student'));
    Route::post('scholar-groups/{id}/store-students/{student_id}', array(
       'as' => 'admin.scholar-groups.store-student', 
       'uses' => 'ScholarGroupController@store_student'));
    Route::resource('scholar-groups', 'ScholarGroupController');
  });

});

//Tutor Routes
Route::group(array('prefix' => 'tutor', 'namespace' => 'tutor'), function()
{
  # Scholar Groups Controller
  Route::group(['before' => 'auth|tutorGroup'], function()
  {
    Route::resource('scholar-groups', 'ScholarGroupController');
  });

});
