@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Create Survey</h1>
    </div>
    @include('partials.error')
    {!! Form::open(['url' => 'survey']) !!}
    @include('survey.form', ['submitButtonText' => 'Create Survey'])
    {!! Form::close() !!}
@endsection