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
        $this->middleware('admin',['except'=>['show', 'edit', 'update']]);
    }
    /**
     * Displays vew of users registered to the site.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){

        $users = User::all();
        if (sizeof($request->input()) > 0)
        {
            $users = $this->search($request);
        }

        return view('users.index', ['users'=>$users]);
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
        if ($filter && $filter != 'none')
        {
            if (strpos($filter, 'L') !== false)
            {
                $query = $query->where('lab', $filter);
            }
        }
        if ($sort && $sort != 'none')
        {
            if ($sort == 'last_name')
            {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('last_name', 'desc');
                else
                    $query = $query->orderBy('last_name');
            } elseif ($sort == 'first_name')
            {
                if ($order && $order == 'desc')
                    $query = $query->orderBy('first_name', 'desc');
                else
                    $query = $query->orderBy('first_name');
            } elseif ($sort == 'student_number')
            {
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
        $this->authorize('userProfile', $user);
        $grades = $user->grades;
        $quizzes = $user->quizzes()->withPivot('attempt')->orderBy('name', 'asc')->orderBy('pivot_attempt', 'asc')->get();
        //temp
        $evaluations  = Evaluation::where('category','labs')->get();
        //$evaluations = Evaluation::all();
        return view('users.show', ['grades'=>$grades, 'quizzes'=>$quizzes, 'evaluations'=>$evaluations, 'user'=>$user]);

    }
    public function edit(User $user){
        $this->authorize('userProfile', $user);
        return view('users.edit', ['user'=>$user]);
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('userProfile', $user);
        $user->update($request->all());
        ($request->input('admin')) ? $user->admin = true : $user->admin = false;
        $user->save();

        return redirect()->action('UsersController@show', ['user'=>$user]);
    }
    /**
     * Destroy a specific user.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user){
        $user->delete();
        return back();
    }

}
