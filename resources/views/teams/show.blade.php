@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Teams</h1>
    </div>
    <h3>Team members</h3>
    @if($team->users->isEmpty())
        <p>No students in this team yet.</p>
    @else
        <ul class="list-group">
            @foreach($team->users as $user)
                <li class="list-group-item"><a href="{{ action('TeamsController@deleteUser', [$team, $user]) }}" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a> {{$user->first_name}} {{$user->last_name}}</li>
            @endforeach
        </ul>
    @endif
    <hr>

    <h3>Add to team</h3>
    @include('users.partials.filter')
    <div class="panel panel-default">
        <!-- Users Table -->
        <table class="table">
            <tr>
                <th>Add To Team</th>
                <th>Student Name</th>
                <th>Student Number</th>
                <th>Lab Section</th>

            </tr>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ action('TeamsController@storeUser', [$team, $user]) }}" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        {{$user->first_name}} {{$user->last_name}}
                    </td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
