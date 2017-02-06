@extends('app')

@section('content')
    <a href="{{ action('SubmissionsController@index') }}"><span class="glyphicon glyphicon-menu-left"
                                                                aria-hidden="true"></span>Back to Submissions</a>
    <div class="page-header center-title">
        <h1>Add Grades</h1>
    </div>
    @include('admin.partials.filter')

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3 class="panel-title">{{$submission->name}} | Out of {{$submission->total}} pts</h3>
        </div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Student Number</th>
                <th>Lab Section</th>
                <th>Submission Date</th>
                <th>Files Submitted</th>
                <th>Latest Attempt Comments</th>
                <th>Mark</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>
                    @if(!$user->submissions()->where('id', $submission->id)->get()->isEmpty())
                        <td>{{$user->submissions()->where('id', $submission->id)->get()->last()->pivot->created_at}}</td>


                        <td>
                            @foreach($user->submissions()->where('id', $submission->id)->get() as $submission)
                                <p>Attempt: {{$submission->pivot->attempt}}
                                    <a href="/{{$submission->pivot->file_path}}">{{$submission->pivot->file_name}}</a>
                                </p>
                            @endforeach
                        </td>
                        <td>
                            {!! nl2br($user->submissions->whereLoose('id', $submission->id)->last()->pivot->comments) !!}
                        </td>
                    @else
                        <td>No Submission</td>
                        <td>No Submission</td>
                        <td>No Submission</td>
                    @endif
                    @if($user->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td>
                            <a href="{{action('GradesController@create', [$submission, $user])}}"
                               class="btn btn-default">Add
                                Grade/Feedback </a>
                        </td>
                    @else
                        <td>
                            {{$user->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br><a href="{{action('GradesController@edit', [$submission, $user])}}"
                                   class="btn btn-info">Edit
                                Grade/Feedback </a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>


@endsection