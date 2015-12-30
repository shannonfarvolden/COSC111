<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reply;
use Auth;

class RepliesController extends Controller
{
    /**
     * Create a new replies controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Leave new reply
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['body'=>'required']);
        $reply = new Reply($request->all());
        Auth::user()->replies()->save($reply);

        return back();

    }
}
