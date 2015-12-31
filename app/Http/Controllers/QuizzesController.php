<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        //
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
     * Store a quiz score into quiz_user and display result.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();

        $score = 0;
        for ($i = 1; $i <= 10; $i++) {
            if($request->has('answer.'.$i))
                if ($request->input('answer.'.$i) == 1)
                    $score++;
        }

        $rst = DB::table('quiz_user')->select('attempt')->where('user_id', $user->id)->where('quiz_number', 1)->orderBy('attempt', 'desc')->first();

        if($rst != null){
            $attempt = $rst->attempt+1;
            $user->quizzes()->attach(1, ['score'=>$score, 'attempt'=> $attempt]);

        }
        else
        {
            $attempt = 1;
            $user->quizzes()->attach(1, ['score'=>$score, 'attempt'=> $attempt]);
        }

        return view('quiz.score', ['score' => $score, 'attempt' => $attempt]);


    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::findorFail($id);

        return view('quiz.show', ['quiz'=>$quiz]);
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
