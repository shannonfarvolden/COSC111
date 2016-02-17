<?php

namespace App\Http\Controllers;

use App\ExamSurvey;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurveyRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use Survey;
use Auth;

class SurveyController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */
    public function survey1()
    {
        return view('survey.survey1');
    }

    /**
     * Display the survey view.
     *
     * @return \Illuminate\Http\Response
     */
    public function survey2()
    {
        $uid = Auth::id();
        $surveyCompleted = (ExamSurvey::all()->contains('user_id', $uid)) ? true : false;

        return view('survey.survey2', ['surveyCompleted'=>$surveyCompleted]);
    }

    /**
     * Store a newly created exam survey in storage.
     *
     * @param SurveyRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(SurveyRequest $request)
    {
        $user = Auth::user();
        $user->survey()->create($request->all());
        $user->survey_completed = true;
        $user->save();

        return redirect('/survey1');
    }

    /**
     * Store a newly created exam survey in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store2(Request $request)
    {
        $this->validate($request, [
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
            'question_9' => 'required',
        ]);

        $user = Auth::user();
        $user->examSurvey()->create($request->all());
        $user->save();

        return redirect('/survey2');
    }


}
