<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reply;
use Auth;
use Gate;

class RepliesController extends Controller
{
    /**
     * Create a new replies controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'destroy']);

    }

    /**
     * Leave new reply
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::denies('forum-active'))
            return view('errors.notactive', ['name' => 'Discussion Forum']);

        $this->validate($request, ['body'=>'required']);
        $reply = new Reply($request->all());
        Auth::user()->replies()->save($reply);

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Reply $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        $reply->delete();
        return back();
    }
}
