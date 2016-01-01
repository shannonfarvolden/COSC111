<?php


Route::get('/', 'PagesController@home');

Route::get('/consent', 'ConsentController@show');
Route::post('/consent', 'ConsentController@store');

Route::get('/grade','GradesController@index');

Route::get('/slide', 'SlidesController@index');
Route::get('/slide/{number}', 'SlidesController@show');

Route::resource('/forum', 'ThreadsController');

Route::post('/forum/{id}/reply', 'RepliesController@store');

Route::get('/quiz/result', 'QuizzesController@result');
Route::resource('/quiz', 'QuizzesController');

Route::get('/lab1', 'LabsController@lab1');
Route::get('/eclipse', 'LabsController@eclipse');
Route::get('/school', 'LabsController@school');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);