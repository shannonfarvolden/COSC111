@extends('app')

@section('content')
    <div class="page-header">
        <h1> Add Grade </h1>
    </div>
    <h3>{{$user->first_name}} {{$user->last_name}}</h3>
    <h4>{{$user->student_number}}</h4>
    {!! Form::open([ 'action' => ['GradesController@store', $submission, $user]]) !!}
    @include('grade.form')
    {!! Form::close() !!}
@endsection