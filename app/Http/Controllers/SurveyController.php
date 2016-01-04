<?php

namespace App\Http\Controllers;

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
    public function show()
    {
        return view('survey.show');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveyRequest $request)
    {
        $user = Auth::user();
        $user->survey()->create($request->all());
        $user->survey_completed = true;
        $user->save();

        return redirect('/survey');
    }


}
