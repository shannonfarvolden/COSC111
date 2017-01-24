<?php

// Home Routes
Route::get('/', 'HomeController@index');

//Consent Routes
Route::get('/consent', 'ConsentController@consent');
Route::post('/consent', 'ConsentController@giveConsent');

//Evaluation Routes
Route::resource('/admin/evaluation', 'EvaluationsController', ['except'=>'show']);

//Submission Routes
Route::resource('/admin/submission', 'SubmissionsController', ['except'=>'index']);
Route::get('/submission', 'SubmissionsController@index');
Route::get('/submission/complete/{submission}', 'SubmissionsController@complete');
Route::get('/submission/create/{submission}', 'SubmissionsController@studentCreate');
Route::post('/submission/create/{submission}', 'SubmissionsController@studentStore');

//Grading Routes
Route::post('/admin/mark/{submission}/{user}','GradesController@store');
Route::get('/admin/mark/{submission}/{user}/edit','GradesController@edit');
Route::get('/admin/mark/{submission}/{user}/create','GradesController@create');
Route::patch('/admin/mark/{grade}','GradesController@update');

//Admin Routes
Route::get('/admin', 'AdminController@admin');
Route::get('/admin/overview', 'AdminController@overview');
Route::get('/admin/mark/{submission}','AdminController@mark');
Route::get('/admin/{evaluation}/{level}', 'AdminController@risk');

//Team Routes
Route::resource('/team', 'TeamsController');
Route::get('/team/{team}/{user}/storeUser','TeamsController@storeUser');
Route::get('/team/{team}/{user}/deleteUser','TeamsController@deleteUser');

//Peer Evaluations Routes
Route::resource('/peerevaluation', 'PeerEvaluationsController');

//Assessment Routes
Route::post('/assessment/{peerevaluation}/{user}','AssessmentsController@store');
Route::get('/assessment/{peerevaluation}/{user}/create','AssessmentsController@create');
Route::get('/assessment/{peerevaluation}/{user}/edit','AssessmentsController@edit');
Route::patch('/assessment/{assessment}','AssessmentsController@update');
Route::get('/assessment/{peerevaluation}/{user}/team', 'AssessmentsController@team');
Route::get('/assessment/{peerevaluation}/{user}/myEvals', 'AssessmentsController@myEvals');

//Users Routes
Route::resource('/users', 'UsersController');

//Slide Routes
Route::resource('/slideset', 'SlideSetsController');
Route::post('/slideset/{slideset}/slides', 'SlideSetsController@addSlide');
Route::delete('/slide/{slide}', 'SlidesController@destroy');

//Video Routes
Route::post('/video/{slideset}','VideosController@store');
Route::get('/video/{slideset}/create','VideosController@create');
Route::get('/video/{video}/edit','VideosController@edit');
Route::patch('/video/{video}','VideosController@update');
Route::delete('/video/{video}', 'VideosController@destroy');

//Thread Routes
Route::resource('/thread', 'ThreadsController');
Route::post('/thread/{thread}/star', 'ThreadsController@star');
Route::post('/thread/{thread}', 'RepliesController@store');

//Quiz Routes
Route::resource('/quiz', 'QuizzesController');
Route::get('/quiz/{quiz}/attempts', 'QuizzesController@attempts');
Route::get('/quiz/{quiz}/{answers}/result', 'QuizzesController@result');
Route::post('/quiz/{quiz}', 'QuizzesController@userQuiz');

//Lab Routes
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

//Assignment Routes
Route::get('/assignment1', 'AssignmentsController@assignment1');
Route::get('/assignment2', 'AssignmentsController@assignment2');
Route::get('/assignment3', 'AssignmentsController@assignment3');

//Stat Routes
Route::get('/stats', 'StatsController@show');
Route::get('/adminStats', 'StatsController@adminStats');

//Survey Routes
Route::get('/survey/results', 'SurveyController@results');
Route::resource('/survey', 'SurveyController');
Route::post('/survey/{survey}', 'SurveyController@userSurvey');

//Authentication Routes
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

