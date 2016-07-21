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
    public function store(Request $request, Quiz $quiz)
    {
        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if($request->has('select.'.$i))
                if ($request->input('select.'.$i) == 1)
                    $score++;
        }

        $attempt = (Auth::user()->hasQuizAttempt($quiz->id))?Auth::user()->lastQuizTaken($quiz->id)->pivot->attempt+1 : 1;

        Auth::user()->quizzes()->attach($quiz->id, ['score'=>$score, 'attempt'=> $attempt]);

        return redirect()->action('QuizzesController@result', ['$quiz'=>$quiz]);
//        return view('quiz.score', ['score' => $score]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {

        if(!Auth::user()->hasQuizAttempt($quiz->id) || Auth::user()->canRetakeQuiz($quiz->id))
        {

            return view('quiz.show', ['quiz' => $quiz]);
        }
        else
        {
            return redirect()->action('QuizzesController@attempts', ['quiz'=>$quiz]);
        }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result(Quiz $quiz)
    {
        $attempt =  Auth::user()->lastQuizTaken($quiz->id)->pivot->attempt;
        $score = Auth::user()->lastQuizTaken($quiz->id)->pivot->score;
        return view('quiz.score', ['score' => $score, 'attempt'=>$attempt]);
    }

    public function attempts(Quiz $quiz)
    {

        $attempts = Auth::user()->quizzes()->where('id', $quiz->id)->get();

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
