<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PeerEvaluation;
use Auth;

class PeerEvaluationsController extends Controller
{

    /**
     * Create a new peerevaluations controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' =>
            'index']);
    }

    /**
     * Displays peerevaluation index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $peerevaluations = PeerEvaluation::all();

        return view('peerevaluations.index', ['peerevaluations' => $peerevaluations]);
    }

    /**
     * Displays create peerevaluation view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('peerevaluations.create');
    }

    /**
     * Store PeerEvaluation in database.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $peerevaluation= PeerEvaluation::create($request->all());

        ($request->input('active')) ? $peerevaluation->active = true : $peerevaluation->active = false;
        $peerevaluation->save();

        return redirect()->action('PeerEvaluationsController@index');
    }

    /**
     * Displays edit a peerevaluation view.
     *
     * @param PeerEvaluation $peerevaluation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PeerEvaluation $peerevaluation)
    {
        return view('peerevaluations.edit', ['peerevaluation' => $peerevaluation]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param PeerEvaluation $peerevaluation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PeerEvaluation $peerevaluation)
    {
        $peerevaluation->update($request->all());

        ($request->input('active')) ? $peerevaluation->active = true : $peerevaluation->active = false;
        $peerevaluation->save();

        return redirect()->action('PeerEvaluationsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PeerEvaluation $peerevaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeerEvaluation $peerevaluation)
    {
        $peerevaluation->delete();
        return redirect()->action('PeerEvaluationsController@index');
    }

}
