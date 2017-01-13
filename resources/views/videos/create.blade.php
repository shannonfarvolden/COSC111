@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Video Link</h1>
    </div>
    @include('partials.error')
    {!! Form::open([ 'action' => ['VideosController@store', $slideset]]) !!}
    @include('videos.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
    <br>
@endsection
