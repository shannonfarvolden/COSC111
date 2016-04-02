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
                <th>Lab Section</th>
                <th>Files Submitted</th>
                <th>Latest Attempt Comments</th>
                <th>Mark</th>
            </tr>

            @foreach($submitStudents as $student)
                <tr>
                    <td>{{$student->submissions->whereLoose('id', $submission->id)->last()->pivot->created_at}}</td>
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
                    <td>{{$student->lab}}</td>
                    <td>
                        @foreach($student->submissions->whereLoose('id', $submission->id) as $submission)
                            <p>Attempt: {{$submission->pivot->attempt}}
                                <a href="/{{$submission->pivot->file_path}}">{{$submission->pivot->file_name}}</a>
                            </p>
                        @endforeach
                    </td>
                    <td>
                        {!! nl2br($student->submissions->whereLoose('id', $submission->id)->last()->pivot->comments) !!}
                    </td>
                    @if($student->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td>
                            <a href="{{action('AdminController@createGrade', [$submission->id, $student->id])}}"
                               class="btn btn-default">Add
                                Grade/Feedback </a>
                        </td>
                    @else
                        <td>
                            {{$student->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br><a href="{{action('AdminController@editGrade', [$submission->id, $student->id])}}"
                                   class="btn btn-info">Edit
                                Grade/Feedback </a>
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
                <th>Lab Section</th>
                <th>Mark</th>
            </tr>
            @foreach($noSubmissions as $student)
                <tr>
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
                    <td>{{$student->lab}}</td>
                    @if($student->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td width="15%">
                            <a href="{{action('AdminController@createGrade', [$submission->id, $student->id])}}"
                               class="btn btn-default">Add
                                Grade/Feedback </a>
                        </td>
                    @else
                        <td width="15%">
                            {{$student->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br><a href="{{action('AdminController@editGrade', [$submission->id, $student->id])}}"
                                   class="btn btn-info">Edit
                                Grade/Feedback </a>
                        </td>

                    @endif
                </tr>
            @endforeach

        </table>
    </div>

@endsection