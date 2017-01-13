@if($slideset->videos->count()>0)
    <h4>Videos</h4>
    <ul>
        @foreach($slideset->videos->sortBy('order') as $video)
            <a href="{{$video->link}}" target="_blank">
                <li>{{$video->name}}</li>
            </a>
            @if(Auth::user()->admin)
                <a href="{{action('VideosController@edit', $video)}}"
                   class="btn btn-default btn-xs">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'action' => ['VideosController@destroy', $video], 'style' => 'display:inline;']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-default btn-xs']) !!}
                {!! Form::close() !!}
            @endif
        @endforeach
    </ul>
    <hr>
@endif