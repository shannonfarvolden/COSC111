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
        $submissions = Submission::where('active', 1)->get();
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
        $lastAttempt = Auth::user()->submissions->whereLoose('id', $id)->last();
//        dd($lastAttempt);
        return view('submission.add', ['submission'=>$submission, 'lastAttempt'=>$lastAttempt]);
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
            $invalid = [':','/','?', '#', '[', ']', '@'];
            $filename = str_replace($invalid, '-', $file->getClientOriginalName()) ;
            $name = $attempt . '-' . Auth::user()->student_number . $filename;
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

}
