@extends('app')

@section('content')

    <div class="heading-margin panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $thread->title }}</h3>
        </div>
        <div class="panel-body">
            <p>{!! nl2br($thread->body) !!}</p>
        </div>
    </div>
    @if($thread->anonymous)
        <p>Anonymous</p>
    @else
        <p>{{$thread->user->first_name}} {{$thread->user->last_name}}</p>
    @endif
    <p>{{$thread->created_at->diffForHumans()}}</p>
    <p>Category: {{$thread->category}}</p><br>
    <hr>
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
    <br><a href="/forum"> Back to discussion forum </a>
@endsection

@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Thread',
            page: '/forum'
        });
    </script>
@endsection
