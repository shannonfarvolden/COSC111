@extends('app')

@section('content')
    <div class="page-header">
        <h1>Edit Peer Eval</h1>
    </div>
    @include('partials.error')
    {!! Form::model($peerevaluation, ['method' => 'PATCH', 'action' => ['PeerEvaluationsController@update', $peerevaluation]]) !!}
    @include('peerevaluations.form',['submitButtonText'=>'Save'])
    {!! Form::close() !!}
@endsection