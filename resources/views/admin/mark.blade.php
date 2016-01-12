@extends('app')

@section('content')
    <div class="page-header">
        <h1>Add Grades <small> Note: Grade Submission in Progress</small></h1>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
           <h3 class="panel-title">{{$submission->name}}</h3>
        </div>

        <!-- Table -->
        <table class="table">
            <tr>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>Files Submitted</th>
                <th>Comments</th>
                <th>Mark</th>
            </tr>


            @foreach($submitStudents as $student)
                <tr>
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
                    <td>
                        @foreach($student->submissions->whereLoose('id', $submission->id) as $submission)
                            <p>Attempt: {{$submission->pivot->attempt}} <a href="/{{$submission->pivot->file_path}}">{{$submission->pivot->file_name}}</a></p>
                        @endforeach
                    </td>
                    <td>
                        {!! nl2br($student->submissions->whereLoose('id', $submission->id)->first()->pivot->comments) !!}
                    </td>
                    <td>
                        {!! Form::open() !!}
                        {!! Form::text('mark', null) !!}
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
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
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
                    <td>
                        {!! Form::open() !!}
                        {!! Form::text('mark', null) !!}
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach


        </table>
    </div>

@endsection