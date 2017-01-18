@extends('app')

@section('content')
    <div class="row">
        <div class="page-header col-md-offset-3 col-md-6 center-title">
            <h1>Edit Evaluation Criteria</h1>
        </div>
    </div>
    @include('partials.error')
    {!! Form::model($team, ['method'=>'PATCH', 'action' => ['TeamsController@update', $team]]) !!}
    @include('teams.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
    <br>
@endsection
