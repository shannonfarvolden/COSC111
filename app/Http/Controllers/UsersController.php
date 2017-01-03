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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $users = User::all();
        $evaluations = Evaluation::all();
        return view('users.index', ['users'=>$users, 'evaluations'=>$evaluations]);
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

        $evaluations = Evaluation::all();
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
