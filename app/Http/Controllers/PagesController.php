<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evaluation;
use Auth;

class PagesController extends Controller
{
    /**
     * Create a new pages controller instance. User must be logged in to view specified pages.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['home', 'development']]);
    }

    /**
     * Display the home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $evaluations = Evaluation::all();
        $total = 0;
        foreach($evaluations as $evaluation){
            $total += $evaluation->grade;
        }
        return view('pages.home', ['evaluations'=>$evaluations, 'total'=>$total]);
    }

    /**
     * Display the dev page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function development()
    {
        return view('pages.development');
    }
    /**
     * Display the consent form view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function consent()
    {
        $data_consent = Auth::user()->data_consent;
        return view('consent.show', ['data_consent'=>$data_consent] );

    }

    /**
     * Store the data_consent value for the authenticated user.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function giveConsent(Request $request)
    {
        $user = Auth::user();
        if($request->get('data_consent'))
            $user->data_consent = true;
        else
            $user->data_consent = false;
        $user->save();

        return redirect('/');
    }

}
