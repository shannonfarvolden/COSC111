@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$user->first_name}} {{$user->last_name}}'s Account @if($user->admin)<small>Admin</small>@endif</h1>

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
            @foreach($quizzes as $attempt)
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
