@if(Auth::user()->admin)
    <form method="POST" action="/thread/{{$thread->id}}/star" >
        {{csrf_field()}}
        @if($thread->starred)
            <button class="btn btn-default">
                Unstar
            </button>
        @else
            <button class="btn btn-default">
                Star
            </button>
        @endif
    </form>
@endif