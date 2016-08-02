@extends('app')

@section('content')
    <div class="page-header">
        <h1>Edit Slide Set</h1>
    </div>
    @include('partials.error')
    {!! Form::open([ 'method'=>'PATCH','action' => ['SlidesController@update', $slideset]]) !!}
    @include('slide.form', ['submitButtonText' => 'Save'])
    {!! Form::close() !!}

    <br>
@endsection
