@extends('app')

@section('content')
    <div class="panel panel-default heading-margin">
        <div class="panel-body padding-sides">

            <div class="page-header">
                <h3>Peer Evaluation for {{$user->first_name}} {{$user->last_name}}</h3>
            </div>
            {!! Form::open([ 'action' => ['AssessmentsController@store', $peerevaluation, $user]]) !!}
            @include('assessments.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection