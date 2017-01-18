<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Team;
use App\User;

class TeamsController extends Controller
{
    /**
     * Create a new admin controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the team.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created team in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Team::create($request->all());

        return redirect()->action('TeamsController@index');
    }

    /**
     * Show specified team.
     *
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, Team $team)
    {
        $users = User::students()->get();
        if (sizeof($request->input()) > 0)
        {
            $users = $this->search($request);
        }

        return view('teams.show', ['team' => $team, 'users'=>$users]);
    }

    /**
     * Show the form for editing the specified team.
     *
     * @param Team $team
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Team $team)
    {

        return view('teams.edit', ['team' => $team]);
    }

    /**
     * Update the specified team in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->update($request->all());
        return redirect()->action('TeamsController@index');
    }

    /**
     * Remove the specified team from storage.
     *
     * @param  Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->action('TeamsController@index');
    }

    /**
     * Store user in team_user table.
     *
     * @param Team $team
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUser(Team $team, User $user){
        $team->users()->attach($user->id);
        return back();
    }
    /**
     * Delete user in team_user table.
     *
     * @param Team $team
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser(Team $team, User $user){
        $team->users()->detach($user->id);
        return back();
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
}
