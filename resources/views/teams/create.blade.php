@extends('app')

@section('content')
    <div class="row">
        <div class="page-header col-md-offset-3 col-md-6 center-title">
            <h1>Add Evaluation Criteria</h1>
        </div>
    </div>
    @include('partials.error')
    {!! Form::open([ 'action' => 'TeamsController@store']) !!}
    @include('teams.form', ['submitButtonText' => 'Add'])
    {!! Form::close() !!}
    <br>
@endsection
