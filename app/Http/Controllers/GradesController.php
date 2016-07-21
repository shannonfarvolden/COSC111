<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use App\Grade;
use App\Quiz;
use App\User;
use Auth;

class GradesController extends Controller {

    /**
     * Create a new grades controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays grades of a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $grades = $user->grades;
        $quizzes = $user->quizzes()->withPivot('attempt')->orderBy('name', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        $marks = $this->calculateMarks();
        $marks = array_add($marks, 'grades', $grades);
        $marks = array_add($marks, 'quizzes', $quizzes);
        return view('grade.index', $marks);
    }

    /**
     * Calculates student marks.
     *
     * @return array
     */
    public function calculateMarks()
    {
        $user = Auth::user();
        $grades = $user->grades;
        $quizzes = Quiz::all();

        $labMark = 0;
        $labTotal = 0;
        $assignmentMark = 0;
        $assignmentTotal = 0;
        $inClassMark = 0;
        $inClassTotal = 0;
        $quizMark = 0;
        $quizTotal = 0;

        foreach($grades as $grade){
            if($grade->submission->category == 'Labs'){
                $labMark += $grade->mark;
                if($grade->submission->bonus == false)
                    $labTotal += $grade->submission->total;
            }
            elseif($grade->submission->category == 'Assignments'){
                $assignmentMark += $grade->mark;
                if($grade->submission->bonus == false)
                    $assignmentTotal += $grade->submission->total;
            }
            elseif($grade->submission->category == 'In-Class'){
                $inClassMark += $grade->mark;
                if($grade->submission->bonus == false)
                    $inClassTotal += $grade->submission->total;
            }

        }
        foreach($quizzes as $quiz){
            $quizMark+= $user->quizzes()->where('id', $quiz->id)->max('score');
            $quizTotal += 10;
        }

        $marks = compact(['labMark', 'labTotal', 'assignmentMark', 'assignmentTotal', 'inClassMark', 'inClassTotal', 'examMark', 'examTotal', 'quizMark', 'quizTotal']);

        return $marks;
    }

    /**
     *  Store a new grade in database.
     *
     * @param Request $request
     * @param User $user
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, User $user, Submission $submission)
    {

        $input = array_add($request->all(), 'submission_id', $submission->id);
        $input = array_add($input, 'user_id', $user->id);
        Grade::create($input);
        return redirect()->action('AdminController@mark',['submission'=>$submission]);

    }

    /**
     * Show the form for creating a new grade for specified student.
     *
     * @param Submissoin $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Submissoin $submission, User $user)
    {

        return view('grade.create', ['submission'=>$submission, 'user'=>$user]);

    }


    /**
     * Show the form for editing the specified submission and student.
     *
     * @param Submission $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Submission $submission, User $user)
    {
        $grade = $user->grades->whereLoose('submission_id', $submission->id)->last();
        return view('grade.edit', ['grade'=>$grade]);

    }

    /**
     * Update the specified grade in database.
     *
     * @param Request $request
     * @param Grade $grade
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($request->all());
        return redirect()->action('AdminController@mark',['submission'=>$grade->submission_id]);
    }

}
