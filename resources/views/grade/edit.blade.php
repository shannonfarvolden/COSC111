@extends('app')

@section('content')
<div class="page-header">
    <h1> Edit Grade </h1>
</div>
<h3>{{$grade->user->first_name}} {{$grade->user->last_name}}</h3>
<h4>{{$grade->user->student_number}}</h4>
    {!! Form::model($grade, ['method' => 'PATCH', 'action' => ['GradesController@update', $grade->id]]) !!}
    @include('grade.form')
    {!! Form::close() !!}
@endsection