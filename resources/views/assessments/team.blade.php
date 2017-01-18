@extends('app')

@section('content')
<div class="page-header center-title">
    <h1>{{$peerevaluation->name}}</h1>
</div>
@if($teamMembers->isEmpty())
    <p>No team members yet.</p>
@else
<div class="panel panel-default">
    <!-- Table -->
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Evaluation</th>
        </tr>

        @foreach($teamMembers as $teamMember)
            <tr>
                <td>{{$teamMember->first_name}}</td>
                <td>{{$teamMember->last_name}}</td>
                @if($teamMember->evaluatee()->where('peer_evaluation_id', $peerevaluation->id)->where('evaluator', Auth::user()->id)->get()->isEmpty())

                    <td>
                        <a href="{{action('AssessmentsController@create', [$peerevaluation, $teamMember])}}"
                           class="btn btn-default">Add Assessment</a>
                    </td>
                @else
                    <td>
                        <a href="{{action('AssessmentsController@edit', [$peerevaluation, $teamMember])}}"
                               class="btn btn-info">Edit Assessment</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>
</div>
@endif

@endsection