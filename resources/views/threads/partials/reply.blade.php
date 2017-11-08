<div class="panel panel-default">
    <div class="panel-body">
        <p class="author">
        @if($reply->anonymous)
            Anonymous
        @else
           {{$reply->user->first_name}} {{$reply->user->last_name}}
        @endif
        <span class="date">{{$reply->created_at->diffForHumans()}}</span>
        </p>
        <p>{!! nl2br($reply->body) !!}</p>

        @if(Auth::user()->admin)
            {!! Form::open(['method' => 'DELETE', 'action' => ['RepliesController@destroy', $reply]]) !!}
            {!! Form::submit('Delete Reply', ['class' => 'btn btn-danger', 'onClick'=>"return confirm('Delete this reply?')"]) !!}
            {!! Form::close() !!}
        @endif

    </div>
</div>
