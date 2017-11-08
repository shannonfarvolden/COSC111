<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SurveyAnswer;
use App\Survey;
use Auth;
use Gate;

class SurveyController extends Controller
{
    /**
     * Create a new survey controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => [
            'userSurvey','show', 'index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::all();
        return view('survey.index', ['surveys'=>$surveys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $questions = $request->input('question');
        $options = $request->input('option');

        $survey = $request->input('active') ? Survey::create(['name' => $request->input('name'), 'active' => $request->input('active'), 'total' => count($questions)]) : Survey::create(['name' => $request->input('name'), 'total' => count($questions)]);

        for ( $i = 1; $i <= count($questions); $i++ ){
            $question = $survey->questions()->create(['question' => $questions[$i]]);
            for ( $j = 1; $j <= count($options[$i]); $j++ ){
                $question->answers()->create(['answer' => $options[$i][$j]]);
            }
        }

        return redirect()->action('SurveyController@index');

    }
    /**
     * Store a user survey in storage.
     *
     * @param Request $request
     * @param Survey $survey
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userSurvey(Request $request, Survey $survey)
    {
        if(Gate::denies('survey-active', $survey))
            return view('errors.notactive', ['name' => $survey->name]);
        // add validation rules and error messages to insure all radio buttons of the survey are filled out
        $rules = [];
        $messages = [];
        for ( $i = 1; $i <= $survey->size(); $i++ ){
            $rules['radio.'.$i] = 'required';
            $messages['radio.'.$i.'.required'] = 'Survey Question '.$i.' is required.';
        }

        $this->validate($request, $rules, $messages);
        //store answers in database if all questions have been filled out
        $numResponses = count($request->input('radio'));
        for ( $i = 1; $i <= $numResponses; $i++ )
        {
            $answer = SurveyAnswer::findOrFail($request->input('radio.' . $i));
            Auth::user()->surveys()->attach($survey->id, ['survey_question_id' => $answer->survey_question_id, 'survey_answer_id' => $answer->id]);

        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        if(Gate::denies('survey-active', $survey))
            return view('errors.notactive', ['name' => $survey->name]);
        if(Auth::user()->surveyComplete($survey->id)){
            return view('survey.complete', ['survey' => $survey]);
        }
        else
            return view('survey.show', ['survey' => $survey]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        return view('survey.edit', ['survey'=>$survey]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        $questions = $request->input('question');
        $answers = $request->input('answer');

        $survey->update(['name' => $request->input('name')]);

        ($request->input('active')) ? $survey->active = true : $survey->active = false;
        $survey->save();

        foreach ($survey->questions as $i => $question) {
            $question->update(['question' => $questions[$i]]);
            foreach ($question->answers as $j => $answer) {
                $answer->update(['answer' => $answers[$i][$j]]);
            }
        }
        return redirect()->action('SurveyController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();

        return redirect()->action('SurveyController@index');
    }

    /**
     * Display Survey results.
     *
     * @param Survey $survey
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function results(Survey $survey){

        return view('survey.results', ['survey'=>$survey]);
    }

    public function download(){

        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=SurveyResults.csv');

        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');
        $users = User::students()->get();
        $quizzes = Quiz::all();
        $peerEvals = PeerEvaluation::all();
        $evaluations = Evaluation::all();

        //excel header
        $header = ["Id", "Last Name", "First Name", "Student Number", "Data Consent"];

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
