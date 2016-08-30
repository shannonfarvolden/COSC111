@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Slide Set</h1>
    </div>
    @include('partials.error')
    {!! Form::open([ 'action' => ['SlideSetsController@store']]) !!}
    @include('slideset.partials.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
    <br>
@endsection
