<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThreadRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Thread;
use Auth;


class ThreadsController extends Controller
{
    /**
     * Create a new threads controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $category = $request->get('category');

        if($category && $category != 'All')
            $threads = Thread::where('category', $category)->orderBy('updated_at', 'desc')->get();
        else
            $threads = Thread::orderBy('updated_at', 'desc')->get();


        return view('thread.index', ['threads' => $threads]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ThreadRequest|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreadRequest $request)
    {
        $thread = Auth::user()->threads()->create($request->all());

        return redirect()->action('ThreadsController@show', ['thread'=>$thread]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view('thread.show', ['thread'=>$thread]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view('thread.edit', ['thread'=>$thread]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
