@extends('app')

@section('content')
    <div class="page-header">
        <h1> Edit Grade </h1>
    </div>
    <h3>{{$team->name}}</h3>
    @foreach($team->users as $user)
        <h4>{{$user->first_name}} {{$user->last_name}}</h4>
    @endforeach
    {!! Form::open([ 'action' => ['GradesController@teamUpdate', $submission, $team]]) !!}
    @include('grade.form')
    {!! Form::close() !!}
@endsection