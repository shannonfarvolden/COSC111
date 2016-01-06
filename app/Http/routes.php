<?php


Route::get('/', 'PagesController@home');

Route::get('/consent', 'ConsentController@show');
Route::post('/consent', 'ConsentController@store');

Route::get('/grade','GradesController@index');

Route::get('/slide', 'SlidesController@index');
Route::get('/slide/{number}', 'SlidesController@show');

Route::resource('/forum', 'ThreadsController');

Route::post('/forum/{id}', 'RepliesController@store');

Route::get('/quiz/{num}/attempts', 'QuizzesController@attempts');
Route::get('/quiz/{num}/result', 'QuizzesController@result');
Route::get('/quiz', 'QuizzesController@index');
Route::get('/quiz/{num}', 'QuizzesController@show');
Route::post('/quiz/{num}', 'QuizzesController@store');

Route::get('/submission', 'SubmissionsController@index');
Route::get('/submission/complete', 'SubmissionsController@complete');
Route::get('/submission/add', 'SubmissionsController@addSubmission');
Route::post('/submission', 'SubmissionsController@storeSubmission');

Route::get('/lab1', 'LabsController@lab1');
Route::get('/eclipse', 'LabsController@eclipse');
Route::get('/school', 'LabsController@school');

Route::get('/survey', 'SurveyController@show');
Route::post('/survey', 'SurveyController@store');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);