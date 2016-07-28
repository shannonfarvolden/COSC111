<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\SubmissionRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use Auth;

class SubmissionsController extends Controller {

    /**
     * Create a new submissions controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => [
            'studentIndex',
            'studentCreate',
            'studentStore',
            'complete'
        ]]);
    }
    /**
     * Displays submission index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $submissions = Submission::orderBy('created_at', 'desc')->get();

        return view('submission.adminIndex', ['submissions'=>$submissions]);
    }

    /**
     * Displays create submission view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        return view('submission.create');
    }

    /**
     * Store Submission in database.
     *
     * @param SubmissionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubmissionRequest $request){

        Submission::create($request->all());

        return redirect('admin/submission');
    }

    /**
     * Displays edit a submission view.
     *
     * @param Submission $submission
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Submission $submission)
    {
        return view('submission.edit', ['submission'=>$submission]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param SubmissionRequest $request
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SubmissionRequest $request, Submission $submission)
    {
        $submission->update($request->all());
        if ($request->get('active')) $submission->active = true;
        else $submission->active = false;

        if ($request->get('bonus')) $submission->bonus = true;
        else $submission->bonus = false;
        $submission->save();


        return redirect()->action('SubmissionsController@index');
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentIndex()
    {
        $submissions = Submission::where('active', 1)->get();

        return view('submission.studentIndex', ['submissions' => $submissions]);
    }

    /**
     * Show the form for creating a new user submission.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentCreate(Submission $submission)
    {
        $lastAttempt = Auth::user()->submissions->whereLoose('id', $submission->id)->last();

        return view('submission.studentCreate', ['submission' => $submission, 'lastAttempt' => $lastAttempt]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function studentStore(Request $request, Submission $submission)
    {
        // validate request, check that files are submitted
        $this->validate($request, ['submissions.*'=>'required'], ['submissions.*'=>'Files are required to make a submission']);
        $files = $request->file('submissions');

        foreach ( $files as $file )
        {

            $attempt = (Auth::user()->hasSubmissionAttempt($submission->id)) ? Auth::user()->lastSubmissionMade($submission->id)->pivot->attempt + 1 : 1;
            $invalid = [':', '/', '?', '#', '[', ']', '@'];
            $filename = str_replace($invalid, '-', $file->getClientOriginalName());
            $name = $attempt . '-' . Auth::user()->student_number . '(' . $submission->id . ')' . $filename;
            $comments = $request->input('comments');
            $file->move('submissions', $name);

            if ($comments)
                Auth::user()->submissions()->attach($submission->id, ['file_name' => $file->getClientOriginalName(), 'file_path' => "submissions/{$name}", 'comments' => $comments, 'attempt' => $attempt]);
            else
                Auth::user()->submissions()->attach($submission->id, ['file_name' => $file->getClientOriginalName(), 'file_path' => "submissions/{$name}", 'attempt' => $attempt]);
        }

        return redirect()->action('SubmissionsController@complete', ['id' => $submission->id]);
    }

    /**
     * Displays Submission complete view.
     *
     * @param Submission $submission
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function complete(Submission $submission)
    {
        return view('submission.complete', ['submission' => $submission]);
    }

}
