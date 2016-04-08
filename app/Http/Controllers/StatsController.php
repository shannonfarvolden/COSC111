<?php

namespace App\Http\Controllers;

use App\ExamSurvey;
use Illuminate\Http\Request;
use App\Quiz;
use App\Submission;
use App\Grade;
use Auth;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Survey;


class StatsController extends Controller {

    /**
     * Create a new stats controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'adminStats']);
    }

    public function show()
    {
//        $survey2 = ExamSurvey::where('number',1)->get();
//        $quizzes = Auth::user()->quizzes()->withPivot('attempt')->orderBy('number', 'asc')->orderBy('pivot_attempt', 'asc')->get();
//        $grades = Auth::user()->grades;
        $userGrades = Auth::user()->grades;
        $labs = Submission::where('name', 'like', 'Lab%')->get();
        $assignments = Submission::where('name', 'like', 'Assignment%')->get();
        $inClasses = Submission::where('name', 'like', 'in-class%')->get();
        $midterms = Submission::where('name', 'like', 'Midterm%')->get();
        $surveys = Submission::where('name', 'like', 'Survey%')->get();

        return view('stats.show', ['userGrades' => $userGrades, 'labs' => $labs, 'assignments' => $assignments, 'inClasses' => $inClasses, 'midterms' => $midterms, 'surveys' => $surveys]);
    }

    public function adminStats()
    {
        $submissions = Submission::all();
        $labs = Submission::where('name', 'like', 'Lab%')->get();
        $assignments = Submission::where('name', 'like', 'Assignment%')->get();
        $inClasses = Submission::where('name', 'like', 'in-class%')->get();
        $midterms = Submission::where('name', 'like', 'Midterm%')->get();
        $surveys = Submission::where('name', 'like', 'Survey%')->get();

        return view('stats.admin', [
            'submissions' => $submissions,
            'labs'        => $labs,
            'assignments' => $assignments,
            'inClasses'   => $inClasses,
            'midterms'    => $midterms,
            'surveys'     => $surveys
        ]);
    }

}
