@extends('app')

@section('content')
    <div class="panel panel-default heading-margin">
        <div class="panel-body padding-sides">
            <div class="page-header">
                <h3>Edit Peer Evaluation for {{$assessment->evaluatee()->get()->first()->first_name}} {{$assessment->evaluatee()->get()->first()->last_name}}</h3>
            </div>
            {!! Form::model($assessment, ['method' => 'PATCH', 'action' => ['AssessmentsController@update', $assessment]]) !!}
            @include('assessments.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection