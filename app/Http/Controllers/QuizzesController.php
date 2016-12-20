<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Quiz;
use App\Question;
use App\Answer;
use Auth;
use Gate;
use DB;

class QuizzesController extends Controller
{

    /**
     * Create a new quizzes controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => [
            'create','edit','store','update'
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();

        return view('quiz.index', ['quizzes' => $quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.create');
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
        $answers = $request->input('answer');
        $correct = $request->input('correct');

        $quiz = $request->input('active') ? Quiz::create(['name' => $request->input('name'), 'active' => $request->input('active'), 'total' => count($questions)]) : Quiz::create(['name' => $request->input('name'), 'total' => count($questions)]);

        for ($i = 0; $i < count($questions); $i++) {
            $question = $quiz->questions()->create(['question' => $questions[$i]]);
            for ($j = 0; $j < count($answers[$i]); $j++) {
                ($j == $correct[$i]) ? $question->answers()->create(['answer' => $answers[$i][$j], 'correct' => true]) : $question->answers()->create(['answer' => $answers[$i][$j], 'correct' => false]);
            }
        }

        return redirect()->action('QuizzesController@index');

    }

    /**
     * Store a user's quiz score into storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function userQuiz(Request $request, Quiz $quiz)
    {
//        if(Gate::denies('allow-quiz', $quiz->id)){
//            redirect()->action('QuizzesController@index');
//        };


        $answers = collect([]);
        for ($i = 0; $i < $quiz->questions->count(); $i++) {
            if ($request->has('select.' . $i)) {
                $answer = Answer::findOrFail($request->input('select.' . $i));
                $answers = $answers->merge([$answer]);
            }

        }
        $score = $answers->whereLoose('correct', 1)->count();

        $attempt = (Auth::user()->hasQuizAttempt($quiz->id)) ? Auth::user()->lastQuizTaken($quiz->id)->pivot->attempt + 1 : 1;

        Auth::user()->quizzes()->attach($quiz->id, ['score' => $score, 'attempt' => $attempt]);

        return view('quiz.score', ['answers' => $answers, 'attempt' => $attempt]);

    }

    /**
     * Display the specified resource.
     *
     * @param  Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {

//        if(Gate::denies('allow-quiz', $quiz->id)){
//            return redirect()->action('QuizzesController@index');
//        };
        if (!Auth::user()->hasQuizAttempt($quiz->id) || Auth::user()->canRetakeQuiz($quiz->id)) {
            return view('quiz.show', ['quiz' => $quiz]);
        } else {
            return redirect()->action('QuizzesController@attempts', ['quiz' => $quiz]);
        }

    }

    public function attempts(Quiz $quiz)
    {

        $attempts = Auth::user()->quizzes()->where('id', $quiz->id)->get();

        return view('quiz.attempts', ['attempts' => $attempts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return view('quiz.edit', ['quiz' => $quiz]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $questions = $request->input('question');
        $answers = $request->input('answer');
        $correct = $request->input('correct');
        $quiz->update(['name' => $request->input('name'), 'active' => $request->input('active'), 'total' => count($questions)]);

        foreach ($quiz->questions as $i => $question) {
            $question->update(['question' => $questions[$i]]);
            foreach ($question->answers as $j => $answer) {

                ($j == $correct[$i]) ? $answer->update(['answer' => $answers[$i][$j], 'correct' => true]) : $answer->update(['answer' => $answers[$i][$j], 'correct' => false]);
            }
        }

        return redirect()->action('QuizzesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->action('QuizzesController@index');
    }
}
