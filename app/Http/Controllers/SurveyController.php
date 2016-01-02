<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{

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
    public function store(Request $request)
    {
        dd($request->all());
    }


}
