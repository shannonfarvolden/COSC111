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
    @if($thread->anonymous)
        <h7>Anonymous</h7><br>
    @else
        <h7>{{$thread->user->first_name}} {{$thread->user->last_name}}</h7><br>
    @endif

    <h7>Category: {{$thread->category}}</h7>

    @if ($replies = $thread->replies)
        @foreach( $replies as $reply)
            @include('thread.partials.reply')
        @endforeach
    @endif


    {!! Form::open([ 'action' => ['RepliesController@store', $thread]]) !!}
    {!! Form::hidden('thread_id', $thread->id) !!}
    @include('thread.partials.replyForm')
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
