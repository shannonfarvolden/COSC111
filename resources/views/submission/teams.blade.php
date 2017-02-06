@extends('app')

@section('content')
    <a href="{{ action('SubmissionsController@index') }}"><span class="glyphicon glyphicon-menu-left"
                                                          aria-hidden="true"></span>Back to Submissions</a>
    <div class="page-header center-title">
        <h1>Teams</h1>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3 class="panel-title">{{$submission->name}} | Out of {{$submission->total}} pts</h3>
        </div>
        <!-- Table -->
    <table class="table">
        <tr>
            <th>Team</th>
            <th>Mark</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{$team->name}}</td>
                @if($team->users()->first()->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                    <td>
                        <a href="{{action('GradesController@teamCreate', [$submission, $team])}}"
                           class="btn btn-default">Add
                            Grade/Feedback </a>
                    </td>
                @else
                    <td>
                        <a href="{{action('GradesController@teamEdit', [$submission, $team])}}"
                               class="btn btn-info">Edit
                            Grade/Feedback </a>
                    </td>
                @endif
            </tr>
        @endforeach
    </table>
    </div>
@endsection
