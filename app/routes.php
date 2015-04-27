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
Route::group(array('prefix' => 'admin'), function()
{
  # Scholar Groups Controller
  Route::group(['before' => 'auth|adminGroup'], function()
  {
    Route::resource('scholar-groups', 'AdminScholarGroupController');
  });

});
