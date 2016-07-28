@extends('app')

@section('content')
    <div class="row">
        <div class="page-header col-md-offset-3 col-md-6 center-title">
            <h1>Edit Evaluation Criteria</h1>
        </div>
    </div>
    @include('partials.error')
    {!! Form::model($evaluation, ['method'=>'PATCH', 'action' => ['EvaluationsController@update', $evaluation]]) !!}
    @include('evaluation.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
    <br>
@endsection
