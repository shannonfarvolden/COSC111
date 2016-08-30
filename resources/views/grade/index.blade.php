@extends('app')

@section('content')
    <div class="page-header">
        <h1>My Grades</h1>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grades</div>
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

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grade Averages</div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Category</th>
                <th>Mark</th>
                <th>Percentage</th>
                <th>Percentage of Final Mark</th>
            </tr>
            @foreach($evaluations as $key=>$evaluation)
                @if($evaluation['total']>0)
                <tr>
                    <td>{{$key}}</td>
                    <td>{{$evaluation['grade']}}/{{$evaluation['total']}}</td>
                    <td>{{round($evaluation['grade']/$evaluation['total'], 4)*100}}%</td>
                    <td>{{$evaluation['percent']}}%</td>
                </tr>
                @endif
            @endforeach
        </table>
    </div>

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