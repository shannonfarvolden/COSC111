@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $thread->title }}</h3>
        </div>
        <div class="panel-body">
            <h7>{{$thread->body}}</h7>
        </div>
    </div>
    <h7>{{$thread->user->name}}</h7><br>
    <h7>Category: {{$thread->category}}</h7>

    @if ($replies = $thread->replies)
        @foreach( $replies as $reply)
            @include('thread.partials.reply')
        @endforeach
    @endif

    {!! Form::open([ 'action' => ['RepliesController@store', $thread]]) !!}
    {!! Form::hidden('thread_id', $thread->id) !!}
    <div class="form-group">
        {!! Form::label('body', 'Reply') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows' => 3]) !!}
        {!! Form::submit('Reply', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
