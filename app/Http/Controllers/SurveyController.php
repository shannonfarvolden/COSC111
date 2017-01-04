<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SurveyAnswer;
use App\Survey;
use Auth;

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
        $survey->update($request->all());
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

    public function results(){
        $surveys = Survey::all();

        return view('survey.results', ['surveys'=>$surveys]);
    }

}
