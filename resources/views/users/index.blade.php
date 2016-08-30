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
            <th>Grades</th>
            <th>Delete</th>

        </tr>
        @foreach($users as $user)
            <tr>

                <td><a href="{{ action('GradesController@index', $user) }}">{{$user->first_name}} {{$user->last_name}}</a></td>
                <td>{{$user->student_number}}</td>
                <td>{{$user->lab}}</td>
                <td>Risk</td>
                <td>{!! Form::open(['method' => 'DELETE', 'action' => ['UsersController@destroy', $user], 'style' => 'display:inline;']) !!}
                    {!! Form::submit('Delete User', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

    </table>
    </div>


@endsection
