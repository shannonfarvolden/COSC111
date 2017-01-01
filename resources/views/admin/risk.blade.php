@extends('app')

@section('content')
    <div class="page-header">
        <h1>Users <small>With risk level {{$level}} in {{$evaluation->category }}</small></h1>
    </div>
    <div class="panel panel-default">
        <!-- Users Table -->
        <table class="table">
            <tr>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>{{$evaluation->category }} Avg %</th>
            </tr>
            @foreach($students as $user)
                <tr>

                    <td>
                        <a href="{{ action('UsersController@show', $user) }}">{{$user->first_name}} {{$user->last_name}}</a>
                    </td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$evaluation->userPercentage($user)}}</td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection
