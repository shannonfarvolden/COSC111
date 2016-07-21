<?php


Route::get('/', 'PagesController@home');
Route::get('/consent', 'PagesController@consent');
Route::post('/consent', 'PagesController@giveConsent');

Route::resource('/admin/submission', 'SubmissionsController');
Route::get('/submission', 'SubmissionsController@studentIndex');
Route::get('/submission/complete/{submission}', 'SubmissionsController@complete');
Route::get('/submission/create/{submission}', 'SubmissionsController@studentCreate');
Route::post('/submission/create/{submission}', 'SubmissionsController@studentStore');

Route::get('/admin', 'AdminController@admin');
Route::get('/admin/mark/{submission}','AdminController@mark');

Route::get('/grade','GradesController@index');
Route::post('/admin/mark/{submission}/{user}','GradesController@store');
Route::get('/admin/mark/{submission}/{user}/edit','GradesController@edit');
Route::get('/admin/mark/{submission}/{user}/create','GradesController@create');
Route::patch('/admin/mark/{grade}','GradesController@update');

Route::get('/users', 'UsersController@index');

Route::get('/slide', 'SlidesController@index');
Route::get('/slide/{week}', 'SlidesController@slideSet');
Route::get('/slide/set/{slide_set}', 'SlidesController@show');

Route::resource('/thread', 'ThreadsController');
Route::post('/thread/{thread}', 'RepliesController@store');

Route::get('/quiz/{quiz}/attempts', 'QuizzesController@attempts');
Route::get('/quiz/{quiz}/result', 'QuizzesController@result');
Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/{quiz}', 'QuizzesController@show');
Route::post('/quiz/{quiz}', 'QuizzesController@store');

Route::get('/lab1', 'LabsController@lab1');
Route::get('/eclipse', 'LabsController@eclipse');
Route::get('/school', 'LabsController@school');
Route::get('/lab2', 'LabsController@lab2');
Route::get('/lab3', 'LabsController@lab3');
Route::get('/lab4', 'LabsController@lab4');
Route::get('/lab5', 'LabsController@lab5');
Route::get('/lab6', 'LabsController@lab6');
Route::get('/lab7', 'LabsController@lab7');
Route::get('/lab8', 'LabsController@lab8');
Route::get('/lab9', 'LabsController@lab9');

Route::get('/assignment1', 'AssignmentsController@assignment1');
Route::get('/assignment2', 'AssignmentsController@assignment2');
Route::get('/assignment3', 'AssignmentsController@assignment3');

Route::get('/stats', 'StatsController@show');
Route::get('/adminStats', 'StatsController@adminStats');

Route::get('/survey/{survey}', 'SurveyController@show');
Route::post('/survey/{survey}', 'SurveyController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);