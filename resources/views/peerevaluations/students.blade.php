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
                <th>Student Evaluations</th>
                <th>Student Number</th>
                <th>Lab Section</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ action('AssessmentsController@myEvals', [$peerevaluation, $user]) }}">{{$user->first_name}} {{$user->last_name}}</a>
                    </td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
