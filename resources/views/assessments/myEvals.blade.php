@extends('app')

@section('content')

    @if($assessments->isEmpty())
        <div class="well">
        <p>No evaluations from team members yet.</p>
        </div>
    @else
        <div class="page-header center-title">
            <h1>{{$peerevaluation->name}}</h1>
        </div>
        <div class="panel panel-default">
            <!-- Table -->
            <table class="table">
                <tr>
                    <th>Mark (Out of 1)</th>
                    <th>Feedback</th>
                </tr>
                @foreach($assessments as $assessment)
                <tr>
                    <td>{{$assessment->mark}}</td>
                    <td>{{$assessment->feedback}}</td>
                </tr>

                @endforeach
            </table>
        </div>
        <p>Average:{{$average}}/1</p>
    @endif

@endsection