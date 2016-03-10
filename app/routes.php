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
    return View::make('landing.home');
}));

Route::get('/login', array('as' => 'login' ,'uses' => 'AuthController@login'));
Route::post('/auth', array('as' => 'auth' , 'uses' => 'AuthController@auth'));
Route::get('/logout', array('as' => 'logout' , 'uses' => 'AuthController@logout'));

//Tutor Routes
Route::group(array('prefix' => 'tutor', 'namespace' => 'tutor'), function()
{
  // Scholar Groups Controller
  Route::group(['before' => 'auth|tutorGroup'], function()
  {
    // Students Managment Routes
    Route::resource('students', 'StudentsController');

    // Tests Managments
    Route::resource('tests', 'StudentTestsController');
    // Activate and Deactivate Tests
    Route::get('/students_tests/{tests}/activate', array('as' => 'tutor.tests.activate' ,'uses' => 'StudentTestsController@activate'));
    Route::get('/students_tests/{tests}/deactivate', array('as' => 'tutor.tests.deactivate' ,'uses' => 'StudentTestsController@deactivate'));

    // Test-Questions
    Route::resource('tests.questions', 'QuestionsController');
  });

});

///General Routes
Route::group(array('prefix' => 'general', 'namespace' => 'general', 'before' => 'auth'), function()
{
  // Student Tests
  Route::resource('tests', 'StudentTestsController',['only' => 'index']);

  // Taken Tests
  Route::resource('tests.taken-tests', 'TakenTestsController');
  
  // Questions
  Route::resource('taken-tests.questions', 'QuestionsController');
  Route::post('/taken-tests/{taken_tests}/questions/{questions}/answer', array('as' => 'general.taken-tests.questions.answer' ,'uses' => 'QuestionsController@answer'));

});
