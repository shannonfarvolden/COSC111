<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PeerEvaluation;
use App\Assessment;
use App\User;
use Auth;

class AssessmentsController extends Controller {

    /**
     * Create a new assessments controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Store a new assessment in database.
     *
     * @param Request $request
     * @param User $user
     * @param PeerEvaluation $peerevaluation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, PeerEvaluation $peerevaluation, User $user)
    {
        $input = array_add($request->all(), 'peer_evaluation_id', $peerevaluation->id);
        $input = array_add($input, 'evaluator', Auth::user()->id);
        $input = array_add($input, 'evaluatee', $user->id);

        Assessment::create($input);

        return redirect()->action('AssessmentsController@team',['peerevaluation'=>$peerevaluation, 'user'=>Auth::user()]);
    }

    /**
     * Show the form for creating a new assessment for specified student.
     *
     * @param PeerEvaluation $peerevaluation
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(PeerEvaluation $peerevaluation, User $user)
    {
        return view('assessments.create', ['peerevaluation'=>$peerevaluation, 'user'=>$user]);
    }

    /**
     * Displays user's team.
     *
     * @param PeerEvaluation $peerevaluation
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function team(PeerEvaluation $peerevaluation, User $user)
    {
        $teamMembers = $user->teams()->first()->users()->whereNotIn('id', [Auth::user()->id])->get();

        return view('assessments.team', ['peerevaluation' => $peerevaluation, 'teamMembers' => $teamMembers]);
    }

    /**
     * Displays users assessments.
     *
     * @param PeerEvaluation $peerevaluation
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myEvals(PeerEvaluation $peerevaluation)
    {
        $assessments = Auth::user()->evaluatee()->where('peer_evaluation_id', $peerevaluation->id)->get();

        return view('assessments.myEvals', ['assessments'=> $assessments]);
    }

    /**
     * Show the form for editing the specified $peerevaluation and student.
     *
     * @param PeerEvaluation $peerevaluation
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PeerEvaluation $peerevaluation, User $user)
    {
        $assessment = $user->evaluatee()->where('peer_evaluation_id', $peerevaluation->id)->where('evaluator', Auth::user()->id)->get()->first();
        return view('assessments.edit', ['assessment'=>$assessment]);

    }

    /**
     * Update the specified assessment in database.
     *
     * @param Request $request
     * @param Assessment $assessment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Assessment $assessment)
    {
        $assessment->update($request->all());
        return redirect()->action('AssessmentsController@team',['peerevaluation'=>$assessment->peerevaluation, 'user'=>Auth::user()]);
    }

}
