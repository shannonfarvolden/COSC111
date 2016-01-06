<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use Auth;

class SubmissionsController extends Controller
{
    /**
     * Create a new submissions controller instance. User must be logged in to view pages.
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

        return view('submission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addSubmission()
    {
        if(Auth::user()->hasSubmissionAttempt('Lab 1'))
            return redirect()->action('SubmissionsController@complete');
        else
            return view('submission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSubmission(Request $request)
    {
        $file=$request->file('submission');
        $name = '1-' . Auth::user()->student_number . $file->getClientOriginalName();
        $comments=$request->input('comments');
        $file->move('submissions/lab1', $name);
        if($comments)
            Auth::user()->submissions()->attach(1, ['file_name'=>$file->getClientOriginalName(), 'file_path'=> "submissions/lab1/{$name}", 'comments'=>$comments  , 'attempt'=>1]);
        else
            Auth::user()->submissions()->attach(1, ['file_name'=>$file->getClientOriginalName(), 'file_path'=> "submissions/lab1/{$name}" , 'attempt'=>1]);
        return redirect()->action('SubmissionsController@complete');
    }

    public function complete()
    {
        return view('submission.complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
