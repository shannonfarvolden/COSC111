<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;


class ConsentController extends Controller
{
    /**
     * Create a new pages controller instance. User must be logged in to view specified pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the consent form view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
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
    public function store(Request $request)
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
