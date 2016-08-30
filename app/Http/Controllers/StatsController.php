<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ExamSurvey;
use App\Evaluation;
use App\Submission;
use Carbon\Carbon;
use App\Survey;
use App\Grade;
use App\Quiz;
use App\User;
use Auth;


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
        $grades = Auth::user()->grades;

        return view('stats.show', ['grades'=>$grades]);
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
