<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evaluation;
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
        $this->middleware('admin', ['except' => [
            'index'
        ]]);
    }

    /**
     * Index grades of a specific user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $grades = $user->grades;
        $quizzes = $user->quizzes()->withPivot('attempt')->orderBy('name', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        $evaluations = $this->calculateMarks($user);
        $marks = [];
        $marks = array_add($marks, 'evaluations', $evaluations);
        $marks = array_add($marks, 'grades', $grades);
        $marks = array_add($marks, 'quizzes', $quizzes);

        return view('grade.index', $marks);
    }

    /**
     * Calculates student marks.
     *
     * @return array
     */
    public function calculateMarks(User $user)
    {
        $evaluations = Evaluation::all();
        $userEvaluations=[];
        foreach($evaluations as $evaluation){
            $submissions = $evaluation->submissions;
            $submissionTotal = 0;
            $submissionMark = 0;
            foreach($submissions as $submission){
                $userGrade = $submission->grades()->where('user_id',$user->id);
                if($userGrade->exists()){
                    $submissionMark += $userGrade->get()->first()->mark;
                    if(!$submission->bonus){
                        $submissionTotal += $submission->total;
                    }

                }
            }
            $userEvaluations[$evaluation->category] = ['grade'=>$submissionMark, 'total'=>$submissionTotal, 'percent'=>$evaluation->grade];
        }

        return $userEvaluations;
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
        $grade = $user->grades()->where('submission_id', $submission->id)->first();
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
