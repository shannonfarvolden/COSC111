<div class="panel panel-default">
    <div class="panel-body">
        @if($reply->anonymous)
            <h7>Anonymous</h7>
        @else
            <h7>{{$reply->user->first_name}} {{$reply->user->last_name}}</h7>
        @endif
        <h7>{{$reply->body}}</h7>
    </div>
</div>