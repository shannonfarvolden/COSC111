<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Quiz;
use App\Submission;

class GradesController extends Controller
{

    /**
     * Create a new grades controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $grades = $user->grades;
        $quizzes = $user->quizzes()->withPivot('attempt')->orderBy('number', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        $quizCount = Quiz::all()->count();
        $inClasses = Submission::where('name', 'like', 'in-class%')->get();

        // total inclass marks
        $inclassSum = 0;
        $inclassTotal = 0;
        for($i = 1; $i<=$quizCount; $i++)
        {
            $inclassSum += $user->quizzes()->where('number', $i)->max('score');
            $inclassTotal+=10;

        }

        foreach($inClasses as $key=>$inclass)
        {
            if ($inclass->grades->count() > 0 && !$inclass->grades->whereLoose('user_id', $user->id)->isEmpty())
                $inclassSum += $inclass->grades->whereLoose('user_id', $user->id)->first()->mark;

            // first inclass mark is bonus
            if($key!=0)
                $inclassTotal += $inclass->total;

        }

        return view('grade.index', ['grades'=>$grades, 'quizzes'=>$quizzes, 'inclassSum'=>$inclassSum, 'inclassTotal'=>$inclassTotal]);
    }
}
