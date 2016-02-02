<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Quiz;
use Auth;
use DB;

class QuizzesController extends Controller
{
    /**
     * Create a new quizzes controller instance. User must be logged in to view pages.
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
        $quizzes = Quiz::all();

        return view('quiz.index', ['quizzes'=>$quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a quiz score into quiz_user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $num)
    {
//        $all = $request->all();
//        $questions = $request->input('questions');
//        dd($all);
        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if($request->has('select.'.$i))
                if ($request->input('select.'.$i) == 1)
                    $score++;
        }

        $attempt = (Auth::user()->hasQuizAttempt($num))?Auth::user()->lastQuizTaken($num)->pivot->attempt+1 : 1;

        Auth::user()->quizzes()->attach($num, ['score'=>$score, 'attempt'=> $attempt]);

        return redirect()->action('QuizzesController@result', ['num'=>$num]);
//        return view('quiz.score', ['attempt'=>$attempt, 'score'=>$score, 'questions'=>$request->input('questions'), 'answers'=>$request->input('answers')]);



    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($num)
    {

        if(!Auth::user()->hasQuizAttempt($num) || Auth::user()->canRetakeQuiz($num))
        {
            $quiz = Quiz::findorFail($num);

            return view('quiz.show', ['quiz' => $quiz]);
        }
        else
        {
            return redirect()->action('QuizzesController@attempts', ['num'=>$num]);
        }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result($num)
    {
        $attempt =  Auth::user()->lastQuizTaken($num)->pivot->attempt;
        $score = Auth::user()->lastQuizTaken($num)->pivot->score;
        return view('quiz.score', ['score' => $score, 'attempt'=>$attempt]);
    }

    public function attempts($num)
    {

        $attempts = Auth::user()->quizzes->whereLoose('number', $num);

        return view('quiz.attempts', ['attempts'=>$attempts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
