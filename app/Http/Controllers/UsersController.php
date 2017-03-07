<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Evaluation;
use App\User;


class UsersController extends Controller
{
    /**
     * Create a new user controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['show', 'edit', 'update']]);
    }

    /**
     * Displays view of users registered to the site.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $users = User::all();
        // check for input from filter
        if (sizeof($request->input()) > 0) {
            $users = $this->search($request);
        }

        return view('users.index', ['users' => $users]);
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
     * Index grades of a specific user.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //check if user is authorized to view user profile.
        $this->authorize('userProfile', $user);

        $grades = $user->grades;
        $quizzes = $user->quizzes()->withPivot('attempt')->orderBy('name', 'asc')->orderBy('pivot_attempt', 'asc')->get();

        $inclassEval = Evaluation::where('category', 'like', 'In-class%')->get()->first();
        $inclassSub = $inclassEval->submissions()->where('name', 'like', '%Individual%')->get();
        // get all evals except inclass
        $evaluations = Evaluation::whereNotIn('id', [$inclassEval->id])->get();

        // quiz user total/evaluation total, user percentage, percentage of final mark so far
        return view('users.show', ['grades' => $grades, 'quizzes' => $quizzes, 'evaluations' => $evaluations, 'inclassEvaluation' => $inclassEval, 'inclassSubmissions'=>$inclassSub, 'user' => $user]);

    }

    /**
     * Displays view to edit a user.
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        //check if user is authorized to edit user profile.
        $this->authorize('userProfile', $user);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update a user in the database.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        //check if user is authorized to update user profile.
        $this->authorize('userProfile', $user);

        $user->update($request->all());
        ($request->input('admin')) ? $user->admin = true : $user->admin = false;
        $user->save();

        return redirect()->action('UsersController@show', ['user' => $user]);
    }

    /**
     * Destroy a specific user.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

}
