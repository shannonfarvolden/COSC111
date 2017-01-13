<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Evaluation;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
*/
    public function index()
    {
        $evaluations = Evaluation::where('grade','>',0)->get();
        $total = 0;
        foreach($evaluations as $evaluation){
            $total += $evaluation->grade;
        }
        return view('home.index', ['evaluations'=>$evaluations, 'total'=>$total]);
    }
}
