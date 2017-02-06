@extends('app')

@section('content')
    <div class="page-header">
        <h1>Users</h1>
    </div>
    @include('users.partials.filter')
    <div class="panel panel-default">
        <!-- Users Table -->
        <table class="table">
            <tr>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>Lab Section</th>
                <th>Edit/Delete</th>

            </tr>
            @foreach($users as $user)
                <tr>

                    <td>
                        <a href="{{ action('UsersController@show', $user) }}">{{$user->first_name}} {{$user->last_name}}</a>
                    </td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>

                    <td>
                        <a href="{{ action('UsersController@edit', $user) }}" class="btn btn-default">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['UsersController@destroy', $user], 'style' => 'display:inline;']) !!}
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection
