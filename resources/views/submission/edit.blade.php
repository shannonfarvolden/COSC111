@extends('app')

@section('content')

    <div class="page-header">
        <h1>Edit</h1>
    </div>
    @include('partials.error')
    {!! Form::model($submission, ['method' => 'PATCH', 'action' => ['SubmissionsController@update', $submission]]) !!}
    @include('submission.adminForm', ['buttonText'=>'Save'])
    {!! Form::close() !!}
@endsection
