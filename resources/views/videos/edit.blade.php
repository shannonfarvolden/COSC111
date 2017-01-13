@extends('app')

@section('content')
    <div class="page-header">
        <h1>Edit Video Link</h1>
    </div>
    @include('partials.error')
    {!! Form::model($video, [ 'method'=>'PATCH','action' => ['VideosController@update', $video]]) !!}
    @include('videos.form', ['submitButtonText' => 'Save'])

    {!! Form::close() !!}

    <br>
@endsection