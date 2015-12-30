@extends('app')

@section('content')
    <div class="page-header">
        <h1>Consent</h1>
    </div>
    <p>Allow user data collected to be used in research</p>
    {!! Form::open([ 'action' => 'SurveyController@store']) !!}
    <div class="form-group">
        {!! Form::label('data_consent', 'Agree') !!}
        {!! Form::checkbox('data_consent', 'value', $data_consent) !!}
    </div>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection