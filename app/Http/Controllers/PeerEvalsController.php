<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use App\User;

class PeerEvalsController extends Controller
{
    /**
     * Create a new peer evals controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     *  Store a new peereval in database.
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
        PeerEval::create($input);
        return redirect()->action('AdminController@mark',['submission'=>$submission]);

    }

    /**
     * Show the form for creating a new peereval for specified student.
     *
     * @param Submissoin $submission
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Submission $submission, User $user)
    {
        return view('peerevals.create', ['submission'=>$submission, 'user'=>$user]);

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
        $peereval = $user->peerevals()->where('submission_id', $submission->id)->first();
        return view('peerevals.edit', ['peereval'=>$peereval]);

    }

    /**
     * Update the specified peereval in database.
     *
     * @param Request $request
     * @param PeerEval $peereval
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PeerEval $peereval)
    {
        $peereval->update($request->all());
        return redirect()->action('AdminController@mark',['submission'=>$peereval->submission_id]);
    }
}
