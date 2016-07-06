<?php

namespace App\Http\Controllers;

use App\Survey;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SurveyAnswer;
use Auth;

class SurveyController extends Controller {

    /**
     * Create a new survey controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the survey view.
     *
     * @param Survey $survey
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Survey $survey)
    {
        if(Auth::user()->surveyComplete($survey->id)){
            return view('survey.complete', ['survey' => $survey]);
        }
        else
            return view('survey.show', ['survey' => $survey]);

    }

    /**
     * Story surveys completed by users in the database
     *
     * @param Request $request
     * @param Survey $survey
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Survey $survey)
    {
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
}
