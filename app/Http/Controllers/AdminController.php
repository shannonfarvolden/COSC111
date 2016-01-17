<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use App\Grade;
use App\User;
use Auth;


class AdminController extends Controller
{
    /**
     * Create a new admin controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexSubmissions()
    {
        $submissions = Submission::all();
        return view('admin.submissions', ['submissions'=>$submissions]);
    }


    public function mark($id)
    {
        $submission = Submission::findorFail($id);

        $submitStudents = $submission->users()->orderBy('pivot_created_at', 'asc')->get()->unique();

        $submitIds = $submitStudents->lists('student_number');
        $noSubmissions = User::where('admin', 0 )->whereNotIn('student_number', $submitIds )->get();


        return view('admin.mark', ['submission'=>$submission, 'submitStudents'=>$submitStudents, 'noSubmissions'=>$noSubmissions]);
    }

    public function storeGrade(Request $request, $id)
    {

        Grade::create(array_add($request->all(), 'submission_id', $id));

//        return redirect()->action('AdminController@mark',['id'=>$id]);
        return redirect()->back();
    }

    public function editGrade($sub_id, $student_id)
    {
        $student = User::findOrFail($student_id);
        $grade = $student->grades->whereLoose('submission_id', $sub_id)->last();
        return view('admin.editGrade', ['grade'=>$grade]);

    }

    public function updateGrade(Request $request, $grade_id)
    {
        $grade = Grade::findOrFail($grade_id);
        $grade->update($request->all());
        return redirect()->action('AdminController@mark',['id'=>$grade->submission_id]);
    }



}
