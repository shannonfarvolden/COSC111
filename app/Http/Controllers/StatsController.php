<?php

namespace App\Http\Controllers;

use App\ExamSurvey;
use Illuminate\Http\Request;
use App\Quiz;
use App\Submission;
use App\Grade;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatsController extends Controller
{
    /**
     * Create a new stats controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {

        $survey2 = ExamSurvey::where('number',1)->get();
        $quizzes = Auth::user()->quizzes()->withPivot('attempt')->orderBy('number', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        $grades = Auth::user()->grades;

        return view('stats.show', ['survey2'=>$survey2, 'quizzes'=>$quizzes, 'grades'=>$grades]);
    }

}
