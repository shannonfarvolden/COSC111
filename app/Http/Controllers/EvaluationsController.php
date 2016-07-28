<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EvaluationsController extends Controller
{
    /**
     * Create a new admin controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        $total = 0;
        foreach($evaluations as $evaluation){
            $total += $evaluation->grade;
        }

        return view('evaluation.index', ['evaluations'=>$evaluations, 'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evaluation::create($request->all());

        return redirect()->action('EvaluationsController@index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Evaluation $evaluation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Evaluation $evaluation)
    {

        return view('evaluation.edit', ['evaluation'=>$evaluation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $evaluation->update($request->all());
        return redirect()->action('EvaluationsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();

        return redirect()->action('EvaluationsController@index');
    }
}
