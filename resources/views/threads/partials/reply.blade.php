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
    </div>
</div>
