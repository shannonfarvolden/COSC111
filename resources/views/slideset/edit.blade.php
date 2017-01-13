@extends('app')

@section('content')
    <div class="page-header">
        <h1>Edit Slide Set</h1>
    </div>
    @include('partials.error')
    {!! Form::model($slideset, [ 'method'=>'PATCH','action' => ['SlideSetsController@update', $slideset]]) !!}
    @include('slideset.partials.form', ['submitButtonText' => 'Save'])

    {!! Form::close() !!}

    <br>
@endsection

