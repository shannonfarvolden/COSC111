@extends('app')

@section('content')
    <div class="page-header">
        <h1>Add Grades
            <small> Note: Tap enter under mark only once per person</small>
        </h1>
    </div>
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
                <th>Files Submitted</th>
                <th>Latest Attempt Comments</th>
                <th>Mark</th>
            </tr>

            @foreach($submitStudents as $student)
                <tr>
                    <td width="10%">{{$student->submissions->whereLoose('id', $submission->id)->last()->pivot->created_at}}</td>
                    <td width="10%">{{$student->first_name}} {{$student->last_name}}</td>
                    <td width="10%">{{$student->student_number}}</td>
                    <td width="20%">
                        @foreach($student->submissions->whereLoose('id', $submission->id) as $submission)
                            <p>Attempt: {{$submission->pivot->attempt}} <a
                                        href="/{{$submission->pivot->file_path}}">{{$submission->pivot->file_name}}</a>
                            </p>
                        @endforeach
                    </td>
                    <td width="30%">
                        {!! nl2br($student->submissions->whereLoose('id', $submission->id)->last()->pivot->comments) !!}
                    </td>
                    @if($student->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td width="10%">
                            {!! Form::open([ 'action' => ['AdminController@storeGrade', $submission->id]]) !!}
                            {!! Form::hidden('user_id', $student->id) !!}
                            {!! Form::text('mark', null, ['class' => 'form-control']) !!}
                            {!! Form::close() !!}
                        </td>
                    @else
                        <td width="10%">
                            {{$student->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br><a href="{{action('AdminController@editGrade', [$submission->id, $student->id])}}">Add
                                Feedback / Edit Mark </a>
                        </td>

                    @endif


                </tr>
            @endforeach


        </table>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3 class="panel-title">No Submission</h3>
        </div>

        <!-- Table -->
        <table class="table">
            <tr>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>Mark</th>
            </tr>
            @foreach($noSubmissions as $student)
                <tr>
                    <td width="45%">{{$student->first_name}} {{$student->last_name}}</td>
                    <td width="45%">{{$student->student_number}}</td>
                    @if($student->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td width="10%">
                            {!! Form::open([ 'action' => ['AdminController@storeGrade', $submission->id]]) !!}
                            {!! Form::hidden('user_id', $student->id) !!}
                            {!! Form::text('mark', null, ['class' => 'form-control']) !!}
                            {!! Form::close() !!}
                        </td>
                    @else
                        <td width="10%">
                            {{$student->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br><a href="{{action('AdminController@editGrade', [$submission->id, $student->id])}}">Add
                                Feedback / Edit Mark</a>
                        </td>

                    @endif
                </tr>
            @endforeach

        </table>
    </div>

@endsection