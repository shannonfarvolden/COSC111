<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Submission;
use App\Grade;
use App\User;
use Auth;


class AdminController extends Controller {

    /**
     * Create a new admin controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Displays view of admin options.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin()
    {
        return view('admin.index');
    }


    /**
     * Displays student submissions.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mark(Submission $submission, Request $request)
    {
        $users = User::where('admin', 0)->get();

        if (sizeof($request->input()) > 0)
        {
            $users = $this->search($request, $submission);
        }

        return view('admin.mark', ['submission' => $submission, 'users' => $users]);
    }

    public function search(Request $request, Submission $submission)
    {
        $query = where('admin', 0)->get();

        $filter = $request->get('filter');
        $sort = $request->get('sort');
        $order = $request->get('order');
        if ($filter && $filter != 'none')
        {
            if (strpos($filter, 'L0') !== false)
            {
                $query = $query->where('lab', $filter);
            }
            if($filter == "file_submitted"){
                $query = $submission->users;
            }
        }
        if ($sort && $sort != 'none')
        {
            if ($sort == 'last_name')
            {
                if ($order && $order == 'desc')
                    $query = $query->sortByDesc('last_name');
                else
                    $query = $query->sortBy('last_name');
            } elseif ($sort == 'first_name')
            {
                if ($order && $order == 'desc')
                    $query = $query->sortByDesc('first_name');
                else
                    $query = $query->sortBy('first_name');
            } elseif ($sort == 'student_number')
            {
                if ($order && $order == 'desc')
                    $query = $query->sortByDesc('student_number');
                else
                    $query = $query->sortBy('student_number');
            } elseif ($sort == 'submission_date')
            {
                if ($order && $order == 'desc')
                    $query = $submission->users()->orderBy('pivot_created_at', 'desc')->get()->unique();
                else
                    $query = $submission->users()->orderBy('pivot_created_at', 'asc')->get()->unique();
            }
        }
        return $query;
    }


}
