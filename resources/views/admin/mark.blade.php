@extends('app')

@section('content')
    <div class="page-header">
        <h1>Add Grades</h1>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
           <h3 class="panel-title">{{$submission}}</h3>
        </div>

        <!-- Table -->
        <table class="table">
            <tr>
                <th>Student Name</th>
                <th>Student Number</th>
            </tr>


            @foreach($submitStudents as $student)
                <tr>
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
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
            </tr>


            @foreach($noSubmissions as $student)
                <tr>
                    <td>{{$student->first_name}} {{$student->last_name}}</td>
                    <td>{{$student->student_number}}</td>
                </tr>
            @endforeach


        </table>
    </div>

@endsection