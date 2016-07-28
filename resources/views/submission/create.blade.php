@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Submission</h1>
    </div>
    @include('partials.error')
    {!! Form::model($submission = new App\Submission, ['url' => 'admin/submission']) !!}
    @include('submission.adminForm',['buttonText'=>'Create'])
    {!! Form::close() !!}
@endsection
