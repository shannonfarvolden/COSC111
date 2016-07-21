@extends('app')

@section('content')
    <div class="page-header">
        <h1>Users</h1>
    </div>

    <div class="panel panel-default">
    <!-- Users Table -->
    <table class="table">
        <tr>
            <th>Student Name</th>
            <th>Student Number</th>
            <th>Lab Section</th>
            <th>Email</th>
            <th>Grades</th>
            <th>Delete</th>

        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->first_name}} {{$user->last_name}}</td>
                <td>{{$user->student_number}}</td>
                <td>{{$user->lab}}</td>
                <td>{{$user->email}}</td>
                <td>Temp</td>
                <td><a href="#" class=" btn btn-danger"> Delete</a></td>
            </tr>
        @endforeach

    </table>
    </div>


@endsection
