@extends('app')

@section('content')
    <a href="{{ action('ThreadsController@index') }}"><span class="glyphicon glyphicon-menu-left"
                                                            aria-hidden="true"></span>Back to forum</a>
    <p class="heading-margin author">
        @if($thread->anonymous)
            Anonymous
        @else
            {{$thread->user->first_name}} {{$thread->user->last_name}}
        @endif
        <span class="date">{{$thread->created_at->diffForHumans()}}</span>
    </p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title padding-top">
            @if($thread->starred)
                <span class="glyphicon glyphicon-star thread-star" aria-hidden="true"></span>
            @endif
             {{ $thread->title }}
            </h3>
        </div>
        <div class="panel-body">
            <p>{!! nl2br($thread->body) !!}</p>
            @if(Auth::user()->admin)
                <br>
                {!! Form::open(['method' => 'DELETE', 'action' => ['ThreadsController@destroy', $thread]]) !!}
                {!! Form::submit('Delete Thread', ['class' => 'btn btn-danger', 'onClick'=>"return confirm('Delete this thread?')"]) !!}
                {!! Form::close() !!}
            @endif

        </div>
    </div>
    <span class="label label-default">Category: {{$thread->category}}</span>

    <div class="padding-top">
        @include('threads.partials.star')
    </div>


    <hr>
    @if ($replies = $thread->replies)
        @foreach( $replies as $reply)
            @include('threads.partials.reply')
        @endforeach
    @endif

    @if(App\Setting::first()->exists() && App\Setting::first()->active_forum)
        {!! Form::open([ 'action' => ['RepliesController@store', $thread]]) !!}
        {!! Form::hidden('thread_id', $thread->id) !!}
        @include('threads.partials.replyForm')
        {!! Form::close() !!}
    @endif

    @include('partials.error')
@endsection

@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Threads',
            page: '/thread'
        });
    </script>
@endsection
