<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
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
//        dd(Carbon::now());
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
    public function store(Request $request)
    {

        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if($request->has('answer.'.$i))
                if ($request->input('answer.'.$i) == 1)
                    $score++;
        }
        $attempt = $this->getAttempt()+1;
        Auth::user()->quizzes()->attach(1, ['score'=>$score, 'attempt'=> $attempt]);

        return redirect()->action('QuizzesController@result');



    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($this->getAttempt() > 0)
        {
            return redirect()->action('QuizzesController@result');
        }
        else
        {
            $quiz = Quiz::findorFail($id);

            return view('quiz.show', ['quiz' => $quiz]);
        }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result()
    {

        return view('quiz.score', ['score' => $this->getScore(), 'attempt'=>$this->getAttempt()]);
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

    public function getAttempt()
    {
        $user = Auth::user();
        $rst = DB::table('quiz_user')->select('attempt')->where('user_id', $user->id)->where('quiz_number', 1)->orderBy('attempt', 'desc')->first();

        if($rst!=null)
            $attempt = $rst->attempt;

        else
            $attempt = 0;

        return $attempt;
    }

    public function getScore()
    {
        $user = Auth::user();
        $rst = DB::table('quiz_user')->select('score')->where('user_id', $user->id)->where('quiz_number', 1)->orderBy('attempt', 'desc')->first();
        return $rst->score;
    }
}
