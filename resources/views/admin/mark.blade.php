@extends('app')

@section('content')
    <div class="page-header">
        <h1>Add Grades</h1>
    </div>
    <div class="row">
        {!! Form::open(['method' => 'GET']) !!}
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('filter', 'Filter') !!}
                {!! Form::select('filter', ['none'=>'None','L01'=>'Lab L01', 'L02'=>'Lab L02', 'L03'=>'Lab L03', 'file_submitted'=>'File Submitted'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('sort', 'Sort') !!}
                {!! Form::select('sort', ['none'=>'None','last_name'=>'Last Name', 'first_name'=>'First Name', 'student_number'=>'Student Number', 'submission_date'=>'Submission Date'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('order', 'Order') !!}
                {!! Form::select('order', ['none'=>'None', 'asc'=>'Asc', 'desc'=>'Desc'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary col-md-offset-2 col-md-4']) !!}
    {!! Form::close() !!}

    <br>
    <hr>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3 class="panel-title">{{$submission->name}} | Out of {{$submission->total}} pts</h3>
        </div>
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Submission Date</th>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>Lab Section</th>
                <th>Files Submitted</th>
                <th>Latest Attempt Comments</th>
                <th>Mark</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>
                    @if(!$user->submissions()->where('id', $submission->id)->get()->isEmpty())
                        <td>{{$user->submissions->whereLoose('id', $submission->id)->last()->pivot->created_at}}</td>


                        <td>
                            @foreach($user->submissions->whereLoose('id', $submission->id) as $submission)
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