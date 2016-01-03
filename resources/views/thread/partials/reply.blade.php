<div class="panel panel-default">
    <div class="panel-body">
        @if($reply->anonymous)
            <p>Anonymous</p>
        @else
            <p>{{$reply->user->first_name}} {{$reply->user->last_name}}</p>
        @endif
        <p>{{$reply->body}}</p>
    </div>
</div>
<p>{{$reply->created_at->diffForHumans()}}</p><br>