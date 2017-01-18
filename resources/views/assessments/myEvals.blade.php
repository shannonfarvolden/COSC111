@extends('app')

@section('content')

    @if($assessments->isEmpty())
        <p>No evaluations yet.</p>
    @else
        @foreach($assessments as $assessment)
        <div class="page-header center-title">
            <h1>{{$assessment->peerevaluation->name}}</h1>
        </div>
        <div class="panel panel-default">
            <!-- Table -->
            <table class="table">
                <tr>
                    <th>Mark</th>
                    <th>Feedback</th>
                </tr>
                <tr>
                    <td>{{$assessment->mark}}</td>
                    <td>{{$assessment->feedback}}</td>
                </tr>

                @endforeach
            </table>
        </div>
    @endif

@endsection