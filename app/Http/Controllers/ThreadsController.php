<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThreadRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ThreadRead;
use Carbon\Carbon;
use App\Setting;
use App\Thread;
use Auth;
use Gate;


class ThreadsController extends Controller
{
    /**
     * Create a new threads controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => ['star', 'destroy', 'setting']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // get category in select field for filtering
        $category = $request->get('category');

        // filter by catergoy
        if($category && $category != 'All')
            $threads = Thread::where('category', $category)->orderBy('created_at', 'desc')->get();
        else
            $threads = Thread::orderBy('created_at', 'desc')->get();

        // Flash old input to repopulate on search
        $request->flash();

        return view('threads.index', ['threads' => $threads]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('forum-active'))
            return view('errors.notactive', ['name' => 'Discussion Forum']);

        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ThreadRequest|Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreadRequest $request)
    {
        if(Gate::denies('forum-active'))
            return view('errors.notactive', ['name' => 'Discussion Forum']);
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
        if(!Auth::user()->threadsRead->contains('thread_id', $thread->id))
        {
            ThreadRead::create(['user_id' => Auth::id(), 'thread_id' => $thread->id]);
        }
        else
        {
            $threadRead = Auth::user()->threadsRead()->where('thread_id', $thread->id)->get()->first();
            $threadRead->updated_at = Carbon::now();
            $threadRead->save();
        }

        return view('threads.show', ['thread'=>$thread]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view('threads.edit', ['thread'=>$thread]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        $thread->delete();
        return redirect()->action('ThreadsController@index');
    }


    /**
     * Add or remove star to thread.
     *
     * @param Thread $thread
     * @return \Illuminate\Http\RedirectResponse
     */
    public function star(Thread $thread){

        if($thread->starred){
            $thread->starred = false;
            $thread->save();
        }
        else{
            $thread->starred = true;
            $thread->save();
        }

        return back();
    }

    /**
     * Show settings view for thread.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function setting(){
        $setting = Setting::first();
        return view('threads.setting', ['setting'=>$setting]);
    }

    /**
     * Store forum setting in database.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSetting(Request $request){

        $setting = Setting::first();
        ($request->input('active_forum')) ? $setting->active_forum = true : $setting->active_forum = false;
        $setting->save();

        return redirect()->action('ThreadsController@index');
    }

    /**
     * Download threads data to json.
     *
     */
    public function download(){
        $threads = Thread::all();

        // output headers so that the file is downloaded rather than displayed
        header('Content-Type: json; charset=utf-8');
        header('Content-Disposition: attachment; filename=Thread Data.json');
        // create a file pointer connected to the output stream
        $output = fopen('php://output', 'w');
        fwrite($output, $threads."\n");

        fwrite($output, '[');
        foreach($threads as $i => $thread){
            foreach($thread->replies as $reply){
                if($i == $threads->count()-1){
                    fwrite($output, $reply);
                }
            else{
                    fwrite($output, $reply.",");
                }

            }
        }
        fwrite($output, ']');

        fclose($output);
    }
}
