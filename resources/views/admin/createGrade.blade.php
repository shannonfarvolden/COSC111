@extends('app')

@section('content')
    <div class="page-header">
        <h1> Add Grade </h1>
    </div>
    <h3>{{$student->first_name}} {{$student->last_name}}</h3>
    <h4>{{$student->student_number}}</h4>
    {!! Form::open([ 'action' => ['AdminController@storeGrade', $sub_id, $student->id]]) !!}

    @include('admin.gradeForm')
    {!! Form::close() !!}
@endsection