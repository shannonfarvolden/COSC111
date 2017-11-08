<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PeerEvaluation;
use App\Http\Requests;
use App\Evaluation;
use App\Submission;
use Carbon\Carbon;
use App\Survey;
use App\Grade;
use App\Quiz;
use App\User;
use App\Team;
use Auth;

class GradesController extends Controller
{

    /**
     * Create a new grades controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     *  Store a new grade in database.
     *
     * @param Request $request
     * @param User $user
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Submission $submission, User $user)
    {

        $input = array_add($request->all(), 'submission_id', $submission->id);
        $input = array_add($input, 'user_id', $user->id);

        //check if grade already exists delete old grades, only one grade should exist for a user submission
        if (!Grade::where('user_id', $user->id)->where('submission_id', $submission->id)->get()->isEmpty()) {
            Grade::where('user_id', $user->id)->where('submission_id', $submission->id)->delete();
        }
        Grade::create($input);

        return redirect()->action('AdminController@mark', ['submission' => $submission]);

    }

    /**
     * Show the form for creating a new grade for specified student.
     *
     * @param Submission $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Submission $submission, User $user)
    {
        return view('grade.create', ['submission' => $submission, 'user' => $user]);

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
        $grade = $user->grades()->where('submission_id', $submission->id)->get()->last();
        return view('grade.edit', ['grade' => $grade]);

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
        return redirect()->action('AdminController@mark', ['submission' => $grade->submission_id]);
    }

    /**
     * Show the form for creating a new grade for team.
     *
     * @param Submission $submission
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teamCreate(Submission $submission, Team $team)
    {
        return view('grade.teamCreate', ['submission' => $submission, 'team' => $team]);

    }


    /**
     * Show the form for editing the specified submission for team.
     *
     * @param Submission $submission
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teamEdit(Submission $submission, Team $team)
    {

        return view('grade.teamEdit', ['submission' => $submission, 'team' => $team]);

    }

    /**
     * Update the specified grade in database for each member of the team.
     *
     * @param Team $team
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamUpdate(Request $request, Submission $submission, Team $team)
    {
        foreach ($team->users as $user) {
            $grade = $user->grades()->where('submission_id', $submission->id)->get()->last();
            if ($grade) {
                $this->update($request, $grade);
            } else {
                $this->store($request, $submission, $user);
            }
        }
        return redirect()->action('SubmissionsController@team', ['submission' => $submission]);
    }

    /**
     *  Store a new grade in database for each member of the team.
     *
     * @param Request $request
     * @param Team $team
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamStore(Request $request, Submission $submission, Team $team)
    {
        foreach ($team->users as $user) {

            $this->store($request, $submission, $user);
        }

        return redirect()->action('SubmissionsController@team', ['submission' => $submission]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Grade $grade , User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $user = $grade->user;
        $grade->delete();
        return redirect()->action('UsersController@show', ['user' => $user]);
    }

    /**
     * Generate Individiual Submission with personalized mark based off peer eval assessments
     */
    public function finalMark()
    {

        $users = User::students()->get();

        $otherEval = Evaluation::where('category', 'like', '%Other%')->get()->first();

        $finalSubmission = Submission::create(['name' => 'Final Course Mark', 'due_date' => Carbon::now(), 'total' => 100, 'evaluation_id' => $otherEval->id]);
        $quizEval = Evaluation::where('category', 'like', '%Quizzes%')->get()->first();

        //get inclass evals
        $inclassEval = Evaluation::where('category', 'like', 'In-class%')->get()->first();
        $inclassSub = $inclassEval->submissions()->where('name', 'like', '%Individual%')->get();
        // get labs
        $labEval = Evaluation::where('category', 'Labs')->get()->first();
        //get assignments
        $assignmentEval = Evaluation::where('category', 'Assignments')->get()->first();
        //get Midterm 1
        $midterm1Eval = Evaluation::where('category', 'Midterm 1')->get()->first();
        //get Midterm 2
        $midterm2Eval = Evaluation::where('category', 'Midterm 2')->get()->first();
        // get Final Exam
        $finalExamEval = Evaluation::where('category', 'Final Exam')->get()->first();

        foreach ($users as $user) {
            // get quiz marks
            $quizzes = Quiz::all();
            $userQuizMark = 0;
            $quizTotal = 0;
            foreach ($quizzes as $quiz) {

                $userQuizMark += $user->maxQuizMark($quiz->id);
                $quizTotal += 10;
            }

            //evaluation marks
            $quizOverall = ($userQuizMark / $quizTotal) * $quizEval->grade;
            $inclassOverall = ($inclassEval->evalGradeExists($user)) ? $inclassEval->userMark($user, $inclassSub, true) * $inclassEval->grade : 0;
            $labOverall = ($labEval->evalGradeExists($user)) ? $labEval->userMark($user) * $labEval->grade : 0;
            $assignmentOverall = ($assignmentEval->evalGradeExists($user)) ? $assignmentEval->userMark($user) * $assignmentEval->grade : 0;
            $midterm1Mark = ($midterm1Eval->evalGradeExists($user)) ? $midterm1Eval->userMark($user) : 0;
            $midterm2Mark = ($midterm2Eval->evalGradeExists($user)) ? $midterm2Eval->userMark($user) : 0;
            $finalExamMark = ($finalExamEval->evalGradeExists($user)) ? $finalExamEval->userMark($user) : 0;

            // Rules for exams
            //1) if MT2 > MT1, then MT1 = MT2
            //2) if Final > MT2 && Final > MT1, then MT1 = Final and MT2 = Final.
            //3) if Final < 50, then Overall = min( actualOverall, 45).
            if ($midterm2Mark > $midterm1Mark) {
                $midterm1Mark = $midterm2Mark;
            }
            if ($finalExamMark > $midterm2Mark && $finalExamMark > $midterm1Mark) {
                $midterm1Mark = $finalExamMark;
                $midterm2Mark = $finalExamMark;
            }
            $midterm1Overall = $midterm1Mark * $midterm1Eval->grade;
            $midterm2Overall = $midterm2Mark * $midterm2Eval->grade;
            $finalExamOverall = $finalExamMark * $finalExamEval->grade;

            $finalCourseMark = $labOverall + $assignmentOverall + $quizOverall + $inclassOverall + $midterm1Overall + $midterm2Overall + $finalExamOverall;

            if ($finalExamMark * 100 < 50) {
                $finalCourseMark = min($finalCourseMark, 45);
            }
            $finalCourseMark = round($finalCourseMark);
            Grade::create(['user_id' => $user->id, 'submission_id' => $finalSubmission->id, 'mark' => $finalCourseMark]);
        }

        return redirect()->action('SubmissionsController@index');

    }

    /**
     * Csv download of marks
     */
    public function download()
    {
        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=marks.csv');

        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');
        $users = User::students()->get();
        $quizzes = Quiz::all();
        $peerEvals = PeerEvaluation::all();

        // get all evals.
        $evaluations = Evaluation::all();

        //excel header
        $header = ["Id", "Last Name", "First Name", "Student Number", "Data Consent", "Discussion Forum", "Replies", "Lab Section"];

        foreach ($evaluations as $evalaution) {
            foreach ($evalaution->submissions as $submission) {
                $header[] = $submission->name . " Mark (out of " . $submission->total . ")";
            }
        }
        foreach($peerEvals as $peerEval){
            $header[] = $peerEval->name. " Avg. Mark";
        }

        foreach ($quizzes as $quiz) {
            $header[] = $quiz->name . " best mark";
            $header[] = $quiz->name . " number of attempts";
        }

        // output the column headings
        fputcsv($output, $header);


        //excel rows
        foreach ($users as $user) {
            $row = [];
            $row[] = $user->id;
            $row[] = $user->last_name;
            $row[] = $user->first_name;
            $row[] = $user->student_number;
            $row[] = $user->data_consent;
            $row[] = $user->threads->count();
            $row[] = $user->replies->count();

            if ($user->lab != null)
                $row[] = $user->lab;
            else
                $row[] = "#N/A,";

            foreach ($evaluations as $evalaution) {
                foreach ($evalaution->submissions as $submission) {
                    $userGrade = $submission->grades()->where('user_id', $user->id);
                    if ($userGrade->exists()) {
                        $row[] = $userGrade->get()->first()->mark;

                    } else {
                        $row[] = "#N/A";
                    }
                }
            }
            foreach ($peerEvals as $peerEval){
                $row[] = $peerEval->assessmentAvg($user->id);

            }
            foreach ($quizzes as $quiz) {
                $row[] = $user->maxQuizMark($quiz->id);
                $row[] = $user->hasQuizAttempt($quiz->id) ? $user->lastQuizTaken($quiz->id)->pivot->attempt : 0;
            }

            fputcsv($output, $row);

        }

    }
}
