@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Peer Evaluation</h1>
    </div>
    @include('partials.error')
    {!! Form::open([ 'action' => 'PeerEvaluationsController@store']) !!}
    @include('peerevaluations.form',['submitButtonText'=>'Create'])
    {!! Form::close() !!}
@endsection
