@extends('app')

@section('content')
<div class="page-header">
    <h1> Edit Grade </h1>
</div>
<h3>{{$grade->user->first_name}} {{$grade->user->last_name}}</h3>
    {!! Form::model($grade, ['method' => 'PATCH', 'action' => ['AdminController@updateGrade', $grade->id]]) !!}
    <div class="form-group">
        {!! Form::label('feedback', 'Feedback') !!}
        {!! Form::textarea('feedback', null, ['class'=>'form-control', 'rows' => 3]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('mark', 'Mark') !!}
        {!! Form::number('mark', null, ['class'=>'form-control', 'rows' => 3]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection