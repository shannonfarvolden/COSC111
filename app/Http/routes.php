<?php


Route::get('/', 'PagesController@home');

Route::get('/consent', 'ConsentController@show');
Route::post('/consent', 'ConsentController@store');

Route::get('/grade','GradesController@index');

Route::get('/admin','AdminController@indexSubmissions');
Route::get('/admin/mark/{id}','AdminController@mark');
Route::post('/admin/mark/{sub_id}/{student_id}','AdminController@storeGrade');
Route::get('/admin/mark/{sub_id}/{student_id}/edit','AdminController@editGrade');
Route::get('/admin/mark/{sub_id}/{student_id}/create','AdminController@createGrade');
Route::patch('/admin/mark/{id}','AdminController@updateGrade');

Route::get('/slide', 'SlidesController@index');
Route::get('/slide/{number}', 'SlidesController@show');

Route::resource('/threads', 'ThreadsController');

Route::post('/threads/{threads}', 'RepliesController@store');

Route::get('/quiz/{id}/attempts', 'QuizzesController@attempts');
Route::get('/quiz/{id}/result', 'QuizzesController@result');
Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/{id}', 'QuizzesController@show');
Route::post('/quiz/{id}', 'QuizzesController@store');

Route::get('/submission', 'SubmissionsController@index');
Route::get('/submission/complete/{id}', 'SubmissionsController@complete');
Route::get('/submission/add/{id}', 'SubmissionsController@add');
Route::post('/submission/add/{id}', 'SubmissionsController@store');

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