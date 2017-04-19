<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evaluation;
use App\User;
use App\Quiz;

class UsersController extends Controller
{
    /**
     * Create a new user controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['show', 'edit', 'update']]);
    }

    /**
     * Displays view of users registered to the site.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $users = User::all();
        // check for input from filter
        if (sizeof($request->input()) > 0) {
            $users = $this->search($request);
        }

        return view('users.index', ['users' => $users]);
    }

    /**
     * Filter and Sort users.
     *
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        $query = User::students();

        $filter = $request->get('filter');
        $sort = $request->get('sort');
        $order = $request->get('order');
        if ($filter && $filter != 'none') {
            if (strpos($filter, 'L') !== false) {
                $query = $query->where('lab', $filter);
            }
        }
        if ($sort && $sort != 'none') {
            if ($sort == 'last_name') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('last_name', 'desc');
                else
                    $query = $query->orderBy('last_name');
            } elseif ($sort == 'first_name') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('first_name', 'desc');
                else
                    $query = $query->orderBy('first_name');
            } elseif ($sort == 'student_number') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('student_number', 'desc');
                else
                    $query = $query->orderBy('student_number');
            }
        }
        // Flash old input to repopulate on search
        $request->flash();

        return $query->get();
    }

    /**
     * Index grades of a specific user.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //check if user is authorized to view user profile.
        $this->authorize('userProfile', $user);

        $grades = $user->grades;

        // get quiz marks
        $quizzes = Quiz::all();
        $userQuizMark =0;
        $quizTotal = 0;
        foreach($quizzes as $quiz){

            $userQuizMark += $user->maxQuizMark($quiz->id);
            $quizTotal+=10;
        }
        $quizAttempts = $user->quizzes()->withPivot('attempt')->orderBy('name', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        $quizEval = Evaluation::where('category', 'like', '%Quizzes%')->get()->first();

        //get inclass evals
        $inclassEval = Evaluation::where('category', 'like', 'In-class%')->get()->first();
        $inclassSub = $inclassEval->submissions()->where('name', 'like', '%Individual%')->get();

        // get all evals except inclass
        $evaluations = Evaluation::whereNotIn('id', [$inclassEval->id])->get();

        //TEMP: Use to get final percent

        //quiz overall
        $quizOverall = ($userQuizMark/$quizTotal)*$quizEval->grade;

        //inclass Overall
        $inclassOverall = ($inclassEval->evalGradeExists($user))?$inclassEval->userMark($user, $inclassSub)*$inclassEval->grade:0;

        // get labs
        $labEval = Evaluation::where('category','Labs')->get()->first();
        $labOverall = ($labEval->evalGradeExists($user))?$labEval->userMark($user)*$labEval->grade:0;

        //get assignments
        $assignmentEval = Evaluation::where('category','Assignments')->get()->first();
        $assignmentOverall = ($assignmentEval->evalGradeExists($user))?$assignmentEval->userMark($user)*$assignmentEval->grade:0;

        //get Midterm 1
        $midterm1Eval = Evaluation::where('category','Midterm 1')->get()->first();
        $midterm1Mark = ($midterm1Eval->evalGradeExists($user))?$midterm1Eval->userMark($user):0;
        //get Midterm 2
        $midterm2Eval = Evaluation::where('category','Midterm 2')->get()->first();
        $midterm2Mark = ($midterm2Eval->evalGradeExists($user))?$midterm2Eval->userMark($user):0;
        // get Final Exam
        $finalExamEval = Evaluation::where('category','Final Exam')->get()->first();
        $finalExamMark = ($finalExamEval->evalGradeExists($user))?$finalExamEval->userMark($user):0;

        // Rules for exams
        //1) if MT2 > MT1, then MT1 = MT2
        //2) if Final > MT2 && Final > MT1, then MT1 = Final and MT2 = Final.
        //3) if Final < 50, then Overall = min( actualOverall, 45).
        if($midterm2Mark>$midterm1Mark){
            $midterm1Mark = $midterm2Mark;
        }
        if($finalExamMark > $midterm2Mark && $finalExamMark > $midterm1Mark){
            $midterm1Mark = $finalExamMark;
            $midterm2Mark = $finalExamMark;
        }
        $midterm1Overall = $midterm1Mark * $midterm1Eval->grade;
        $midterm2Overall = $midterm2Mark * $midterm2Eval->grade;
        $finalExamOverall = $finalExamMark * $finalExamEval->grade;

        $finalCourseMark = $labOverall + $assignmentOverall + $quizOverall + $inclassOverall + $midterm1Overall + $midterm2Overall+$finalExamOverall;

        if($finalExamMark*100<50){
            $finalCourseMark = min($finalCourseMark,45);
        }

        $finalLetterGrade = $this->letterGrade($finalCourseMark);

        return view('users.show', ['user' => $user, 'grades' => $grades,'evaluations'=>$evaluations, 'quizzes'=>$quizzes, 'quizEval'=>$quizEval,'userQuizMark' => $userQuizMark, 'quizTotal'=>$quizTotal , 'quizAttempts' => $quizAttempts, 'labEval' => $labEval, 'assignmentEval'=>$assignmentEval, 'inclassEvaluation' => $inclassEval, 'inclassSubmissions'=>$inclassSub, 'finalCourseMark'=>$finalCourseMark, 'finalLetterGrade'=>$finalLetterGrade ]);

    }

    /**
     * Return letter grade given a mark.
     *
     * @param $mark
     * @return string
     */
    public function letterGrade($mark){
        if($mark<50)
            return 'F';
        else if($mark<55)
            return 'D';
        else if($mark<60)
            return 'C-';
        else if($mark<64)
            return 'C';
        else if($mark<68)
            return 'C+';
        else if($mark<72)
            return 'B-';
        else if($mark<76)
            return 'B';
        else if($mark<80)
            return 'B+';
        else if($mark<85)
            return 'A-';
        else if($mark<90)
            return 'A';
        else
            return 'A+';
    }
    /**
     * Returns total mark for an evaluation.
     *
     * @param \App\User $user
     * @param Collection|null $submissions
     * @return int
     */
    public function evaluationTotal(User $user, Collection $submissions = null)
    {

        $evaluationTotal = 0;
        if(!$submissions){
            $submissions = $this->submissions;
        }
        foreach ( $submissions as $submission )
        {
            $userGrade = $submission->grades()->where('user_id', $user->id);
            if ($userGrade->exists())
            {
                if (!$submission->bonus)
                {
                    $evaluationTotal += $submission->total;
                }

            }
        }

        return $evaluationTotal;
    }

    /**
     * Returns user total mark for an evaluation.
     *
     * @param \App\User $user
     * @param Collection|null $submissions
     * @return int
     */
    public function userTotalMark(User $user,  Collection $submissions = null)
    {

        $userTotalMark = 0;
        if(!$submissions){
            $submissions = $this->submissions;
        }
        foreach ( $submissions as $submission )
        {
            $userGrade = $submission->grades()->where('user_id', $user->id);
            if ($userGrade->exists())
            {
                $userTotalMark += $userGrade->get()->first()->mark;

            }
        }

        return $userTotalMark;
    }
    /**
     * Returns a specific users average percentage for an evaluation.
     *
     * @param \App\User $user
     * @return float
     */
    public function userPercentage(User $user, Collection $submissions = null)
    {
        return round($this->userTotalMark($user, $submissions) / $this->evaluationTotal($user, $submissions), 4) * 100;
    }
    public function userFinalPercentage(User $user, Collection $submissions = null)
    {
        return round(($this->userTotalMark($user, $submissions) / $this->evaluationTotal($user, $submissions)) * $this->grade, 1);
    }


    /**
     * Displays view to edit a user.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        //check if user is authorized to edit user profile.
        $this->authorize('userProfile', $user);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update a user in the database.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        //check if user is authorized to update user profile.
        $this->authorize('userProfile', $user);

        $user->update($request->all());
        ($request->input('admin')) ? $user->admin = true : $user->admin = false;
        $user->save();

        return redirect()->action('UsersController@show', ['user' => $user]);
    }

    /**
     * Destroy a specific user.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

}
