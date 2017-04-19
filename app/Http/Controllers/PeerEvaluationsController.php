<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PeerEvaluation;
use App\Submission;
use App\Evaluation;
use App\Grade;
use App\User;
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

        $peerevaluation = PeerEvaluation::create($request->all());

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

    /**
     * Displays view to link peer evaluations with inclass submissions.
     *
     * @param PeerEvaluation $peerevaluation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function link(PeerEvaluation $peerevaluation)
    {

        $inclassSubmissions = Evaluation::where('category', 'In-class activities')->get()->first()->submissions;

        return view('peerevaluations.link', ['peerevaluation' => $peerevaluation, 'inclassSubmissions'=>$inclassSubmissions]);
    }

    /**
     * Store in database link for peer evaluation to submissions.
     *
     * @param PeerEvaluation $peerevaluation
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeLink(PeerEvaluation $peerevaluation, Submission $submission)
    {
        $peerevaluation->submissions()->attach($submission->id);
        return back();
    }

    /**
     * Delete link from database for link between peer evaluation and submission.
     *
     * @param PeerEvaluation $peerevaluation
     * @param Submission $submission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteLink(PeerEvaluation $peerevaluation, Submission $submission)
    {
        $peerevaluation->submissions()->detach($submission->id);
        return back();
    }

    /**
     * Display users of a peer evaluation.
     *
     * @param PeerEvaluation $peerevaluation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function students(Request $request, PeerEvaluation $peerevaluation){
        $users = User::students()->get();
        // check for input from filter
        if (sizeof($request->input()) > 0) {
            $users = $this->search($request);
        }
        return view('peerevaluations.students', ['peerevaluation'=>$peerevaluation, 'users' => $users]);
    }

    /**
     * Filter and Sort users.
     *
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        $query = User::students();

        $filter = $request->get('filter');
        $sort = $request->get('sort');
        $order = $request->get('order');
        if ($filter && $filter != 'none') {
            if (strpos($filter, 'L') !== false) {
                $query = $query->where('lab', $filter);
            }
        }
        if ($sort && $sort != 'none') {
            if ($sort == 'last_name') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('last_name', 'desc');
                else
                    $query = $query->orderBy('last_name');
            } elseif ($sort == 'first_name') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('first_name', 'desc');
                else
                    $query = $query->orderBy('first_name');
            } elseif ($sort == 'student_number') {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('student_number', 'desc');
                else
                    $query = $query->orderBy('student_number');
            }
        }
        // Flash old input to repopulate on search
        $request->flash();

        return $query->get();
    }

    /**
     * Generate Individiual Submission with personalized mark based off peer eval assessments
     */
    public function individualMark(PeerEvaluation $peerevaluation){

        $users = User::students()->get();
        foreach($peerevaluation->submissions as $submission){

            // Create Individual Submission name based of Team name
            $name = $submission->name;
            if(stripos($name,"team") === false) {
                //if name does not contain team add individual to submission name
                $name = $name . ' Individual';
            }
            else{
                //contains team replace with individual
                $name = str_ireplace("team","Individual",$submission->name);
            }

            $individualSub = Submission::create(['name'=>$name,'due_date'=>$submission->due_date, 'total'=>$submission->total, 'evaluation_id'=>$submission->evaluation_id, 'active'=>false,
            'bonus'=>$submission->bonus]);

            //generate individual grades if student has a team mark
            foreach($users as $user){
                //if user has a team mark create individual mark based on peer eval average and team mark
                if(!$user->grades->whereLoose('submission_id', $submission->id)->isEmpty()){
                    $mark = $user->grades->whereLoose('submission_id', $submission->id)->last()->mark * $peerevaluation->assessmentAvg($user->id);
                }
                else{
                    $mark = 0;
                }
                Grade::create(['user_id'=>$user->id, 'submission_id'=>$individualSub->id, 'mark'=>$mark ]);
            }
        }
        return redirect()->action('PeerEvaluationsController@index');

    }

}
