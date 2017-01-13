@extends('app')

@section('content')
    <div class="page-header">
        <h1> Add Eval </h1>
    </div>
    <h3>{{$user->first_name}} {{$user->last_name}}</h3>
    {!! Form::open([ 'action' => ['PeerEvalsController@store', $submission, $user]]) !!}

    @include('peerevals.form')
    {!! Form::close() !!}
@endsection