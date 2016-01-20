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
        $submissions = Submission::all();
        return view('submission.index', ['submissions'=>$submissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $submission = Submission::findOrFail($id);

        return view('submission.add', ['submission'=>$submission]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $files = $request->file('submissions');

        foreach($files as $file){

            $attempt = (Auth::user()->hasSubmissionAttempt($id))?Auth::user()->lastSubmissionMade($id)->pivot->attempt+1 : 1;

            $name = $attempt . '-' . Auth::user()->student_number . $file->getClientOriginalName();
            $comments=$request->input('comments');
            $file->move('submissions', $name);

            if($comments)
                Auth::user()->submissions()->attach($id, ['file_name'=>$file->getClientOriginalName(), 'file_path'=> "submissions/{$name}", 'comments'=>$comments  , 'attempt'=>$attempt]);
            else
                Auth::user()->submissions()->attach($id, ['file_name'=>$file->getClientOriginalName(), 'file_path'=> "submissions/{$name}" , 'attempt'=>$attempt]);
        }

        return redirect()->action('SubmissionsController@complete', ['id'=>$id]);
    }

    public function complete($id)
    {
        $submission = Submission::findOrFail($id);
        return view('submission.complete', ['submission'=>$submission] );
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
