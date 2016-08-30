@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Edit Survey</h1>
    </div>
    @include('partials.error')
    {!! Form::model($survey, ['method' => 'PATCH', 'action' => ['SurveyController@update', $survey]]) !!}
    @include('survey.form', ['submitButtonText' => 'Edit Survey'])
    {!! Form::close() !!}
@endsection