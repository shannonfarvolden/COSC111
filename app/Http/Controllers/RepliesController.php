<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Thread;
use App\Reply;
use Request;
use Auth;

class RepliesController extends Controller
{
    /**
     * Leave new reply
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $reply = new Reply(Request::all());
        Auth::user()->replies()->save($reply);

        return back();

    }
}
