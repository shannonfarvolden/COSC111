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
                <th>Section</th>
                <th>Mark</th>
                <th>Percentage</th>
            </tr>
            @if($labTotal > 0)
                <tr>
                    <td>Labs</td>
                    <td>{{$labMark}}/{{$labTotal}}</td>
                    <td>{{round($labMark/$labTotal, 4)*100}}%</td>
                </tr>
            @endif
            @if($quizTotal > 0)
                <tr>
                    <td>Quizzes</td>
                    <td>{{$quizMark}}/{{$quizTotal}}</td>
                    <td>{{round($quizMark/$quizTotal, 4)*100}}%</td>
                </tr>
            @endif
            @if($inClassTotal > 0)
                <tr>
                    <td>in-class assignments</td>
                    <td>{{$inClassMark}}/{{$inClassTotal}}</td>
                    <td>{{round($inClassMark/$inClassTotal, 4)*100}}%</td>
                </tr>
            @endif
            @if($assignmentTotal > 0)
                <tr>
                    <td>Assignments</td>
                    <td>{{$assignmentMark}}/{{$assignmentTotal}}</td>
                    <td>{{round($assignmentMark/$assignmentTotal, 4)*100}}%</td>
                </tr>
            @endif

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