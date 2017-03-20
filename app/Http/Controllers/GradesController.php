<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evaluation;
use App\Submission;
use App\Grade;
use App\Quiz;
use App\User;
use App\Team;
use Auth;

class GradesController extends Controller {

    /**
     * Create a new grades controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     *  Store a new grade in database.
     *
     * @param Request $request
     * @param User $user
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Submission $submission, User $user)
    {

        $input = array_add($request->all(), 'submission_id', $submission->id);
        $input = array_add($input, 'user_id', $user->id);

        //check if grade already exists delete old grades, only one grade should exist for a user submission
        if(!Grade::where('user_id', $user->id)->where('submission_id',$submission->id)->get()->isEmpty()){
            Grade::where('user_id', $user->id)->where('submission_id',$submission->id)->delete();
        }
        Grade::create($input);

        return redirect()->action('AdminController@mark',['submission'=>$submission]);

    }

    /**
     * Show the form for creating a new grade for specified student.
     *
     * @param Submission $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Submission $submission, User $user)
    {
        return view('grade.create', ['submission'=>$submission, 'user'=>$user]);

    }


    /**
     * Show the form for editing the specified submission and student.
     *
     * @param Submission $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Submission $submission, User $user)
    {
        $grade = $user->grades()->where('submission_id', $submission->id)->get()->last();
        return view('grade.edit', ['grade'=>$grade]);

    }

    /**
     * Update the specified grade in database.
     *
     * @param Request $request
     * @param Grade $grade
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($request->all());
        return redirect()->action('AdminController@mark',['submission'=>$grade->submission_id]);
    }

    /**
     * Show the form for creating a new grade for team.
     *
     * @param Submission $submission
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teamCreate(Submission $submission, Team $team)
    {
        return view('grade.teamCreate', ['submission'=>$submission, 'team'=>$team]);

    }


    /**
     * Show the form for editing the specified submission for team.
     *
     * @param Submission $submission
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function teamEdit(Submission $submission, Team $team)
    {

        return view('grade.teamEdit', ['submission'=>$submission,'team'=>$team]);

    }
    /**
     * Update the specified grade in database for each member of the team.
     *
     * @param Team $team
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamUpdate(Request $request, Submission $submission, Team $team)
    {
        foreach($team->users as $user){
            $grade = $user->grades()->where('submission_id', $submission->id)->get()->last();
            if($grade){
                $this->update($request, $grade);
            }
            else{
                $this->store($request, $submission, $user);
            }
        }
        return redirect()->action('SubmissionsController@team',['submission'=>$submission]);
    }
    /**
     *  Store a new grade in database for each member of the team.
     *
     * @param Request $request
     * @param Team $team
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teamStore(Request $request, Submission $submission, Team $team)
    {
        foreach($team->users as $user){

            $this->store($request, $submission, $user);
        }

        return redirect()->action('SubmissionsController@team',['submission'=>$submission]);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Grade $grade, User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $user = $grade->user;
        $grade->delete();
        return redirect()->action('UsersController@show',['user'=>$user]);
    }


}
