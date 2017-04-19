@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$user->first_name}} {{$user->last_name}}'s Account @if($user->admin)
                <small>Admin</small>@endif @if($user->hasTeam())
                <small>{{$user->teams->first()->name}}</small>@endif</h1>

    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grades<p>
                Note: Your in-class team marks may change depending on your peer eval scores.
        </div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Item</th>
                <th>Mark</th>
                <th>Feedback</th>
            </tr>
            @foreach($grades as $grade)
                <tr>
                    <td>{{$grade->submission->name}}</td>
                    <td>{{$grade->mark}}/{{$grade->submission->total}}</td>
                    <td>{!! nl2br($grade->feedback) !!}</td>
                    <td>
                        @if(Auth::user()->admin)
                            {!! Form::open(['method' => 'DELETE', 'action' => ['GradesController@destroy', $grade], 'style' => 'display:inline;']) !!}
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Quizzes</div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Quiz</th>
                <th>Attempt</th>
                <th>Score</th>
            </tr>
            @foreach($quizAttempts as $attempt)
                <tr>
                    <td>{{$attempt->name}}</td>
                    <td>#{{$attempt->pivot->attempt}}</td>
                    <td>{{$attempt->pivot->score}}/10</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="well well-sm">
        Most urgent risk factor displayed. Possible standing labels are:
        <span class="label label-success">success</span>
        <span class="label label-warning">warning</span>
        <span class="label label-danger">danger</span>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grade Averages</div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Category</th>
                <th>Mark</th>
                <th>Percentage</th>
                <th>Percentage of Final Mark So Far</th>
                <th>Standing</th>
            </tr>
            @foreach($evaluations as $evaluation)
                @if($evaluation->evaluationTotal($user)>0)
                    <tr>
                        <td>{{$evaluation->category}}</td>
                        <td>{{$evaluation->userTotalMark($user)}}/{{$evaluation->evaluationTotal($user)}}</td>
                        <td>{{$evaluation->userPercentage($user)}}%
                        </td>
                        <td>{{$evaluation->userFinalPercentage($user)}}/{{$evaluation->grade}}%
                        </td>
                        <td>
                            <span class="label label-{{$evaluation->userStanding($user)}}">{{$evaluation->userStanding($user)}}</span>
                        </td>
                    </tr>
                @endif
            @endforeach
            {{--@if($labEval->evaluationTotal($user)>0)--}}
                {{--<tr>--}}
                    {{--<td>{{$labEval->category}}</td>--}}
                    {{--<td>{{$labEval->userTotalMark($user)}}/{{$labEval->evaluationTotal($user)}}</td>--}}
                    {{--<td>{{$labEval->userPercentage($user)}}%--}}
                    {{--</td>--}}
                    {{--<td>{{$labEval->userFinalPercentage($user)}}/{{$labEval->grade}}%--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<span class="label label-{{$labEval->userStanding($user)}}">{{$labEval->userStanding($user)}}</span>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endif--}}
            {{--@if($assignmentEval->evaluationTotal($user)>0)--}}
                {{--<tr>--}}
                    {{--<td>{{$assignmentEval->category}}</td>--}}
                    {{--<td>{{$assignmentEval->userTotalMark($user)}}/{{$assignmentEval->evaluationTotal($user)}}</td>--}}
                    {{--<td>{{$assignmentEval->userPercentage($user)}}%--}}
                    {{--</td>--}}
                    {{--<td>{{$assignmentEval->userFinalPercentage($user)}}/{{$assignmentEval->grade}}%--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<span class="label label-{{$assignmentEval->userStanding($user)}}">{{$assignmentEval->userStanding($user)}}</span>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endif--}}
            {{--@if($midterm1Eval->evaluationTotal($user)>0)--}}
                {{--<tr>--}}
                    {{--<td>{{$midterm1Eval->category}}</td>--}}
                    {{--<td>{{$midterm1Eval->userTotalMark($user)}}/{{$midterm1Eval->evaluationTotal($user)}}</td>--}}
                    {{--<td>{{$midterm1Eval->userPercentage($user)}}%--}}
                    {{--</td>--}}
                    {{--<td>{{$midterm1Eval->userFinalPercentage($user)}}/{{$midterm1Eval->grade}}%--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<span class="label label-{{$midterm1Eval->userStanding($user)}}">{{$midterm1Eval->userStanding($user)}}</span>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endif--}}
            {{--@if($midterm2Eval->evaluationTotal($user)>0)--}}
                {{--<tr>--}}
                    {{--<td>{{$midterm2Eval->category}}</td>--}}
                    {{--<td>{{$midterm2Eval->userTotalMark($user)}}/{{$midterm2Eval->evaluationTotal($user)}}</td>--}}
                    {{--<td>{{$midterm2Eval->userPercentage($user)}}%--}}
                    {{--</td>--}}
                    {{--<td>{{$midterm2Eval->userFinalPercentage($user)}}/{{$midterm2Eval->grade}}%--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<span class="label label-{{$midterm2Eval->userStanding($user)}}">{{$midterm2Eval->userStanding($user)}}</span>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endif--}}
            {{--@if($finalExamEval->evaluationTotal($user)>0)--}}
                {{--<tr>--}}
                    {{--<td>{{$finalExamEval->category}}</td>--}}
                    {{--<td>{{$finalExamEval->userTotalMark($user)}}/{{$finalExamEval->evaluationTotal($user)}}</td>--}}
                    {{--<td>{{$finalExamEval->userPercentage($user)}}%--}}
                    {{--</td>--}}
                    {{--<td>{{$finalExamEval->userFinalPercentage($user)}}/{{$finalExamEval->grade}}%--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<span class="label label-{{$finalExamEval->userStanding($user)}}">{{$finalExamEval->userStanding($user)}}</span>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endif--}}
            @if($inclassEvaluation->evaluationTotal($user, $inclassSubmissions)>0)
                <tr>
                    <td>{{$inclassEvaluation->category}} (Individual Marks)</td>
                    <td>{{$inclassEvaluation->userTotalMark($user, $inclassSubmissions)}}
                        /{{$inclassEvaluation->evaluationTotal($user, $inclassSubmissions)}}</td>
                    <td>{{$inclassEvaluation->userPercentage($user, $inclassSubmissions)}}%</td>
                    <td>{{$inclassEvaluation->userFinalPercentage($user, $inclassSubmissions)}}
                        /{{$inclassEvaluation->grade}}%
                    </td>
                    <td>
                        <span class="label label-{{$inclassEvaluation->userStanding($user, $inclassSubmissions)}}">{{$inclassEvaluation->userStanding($user, $inclassSubmissions)}}</span>
                    </td>
                </tr>
            @endif

            @if($quizzes->count()>0)
                <tr>
                    <td>Quizzes (Max mark)</td>
                    <td>{{$userQuizMark}}/{{$quizTotal}}</td>
                    <td>{{round($userQuizMark/$quizTotal,4)*100}}%</td>
                    <td>{{round(($userQuizMark/$quizTotal)*$quizEval->grade,1)}}/{{$quizEval->grade}}%</td>
                    <td>
                        <span class="label label-{{$quizEval->gradeStanding(round($userQuizMark/$quizTotal,4)*100)}}">{{$quizEval->gradeStanding(round($userQuizMark/$quizTotal,4)*100)}}</span>
                    </td>
                </tr>
            @endif
            <tr>
                <td>
                    <Strong>Final Course Mark</Strong>
                </td>
                <td>{{round($finalCourseMark,2)}}/100</td>
                <td>{{round($finalCourseMark)}}%</td>
                <td></td>
                <td><span class="label label-default">{{$finalLetterGrade}}</span></td>
            </tr>
        </table>

    </div>
    <a href="{{action('UsersController@edit', $user)}}" class="btn btn-default">Edit Account Info </a>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Grades',
            page: '/grade'
        });
    </script>
@endsection
