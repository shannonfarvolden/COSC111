@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Thread</h1>
    </div>
    {!! Form::open(['url' => 'forum']) !!}
    @include('thread.form', ['submitButtonText' => 'Create Thread'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
