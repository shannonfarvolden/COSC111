@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$slideset->topic}}</h1>
    </div>


    @foreach($slideset->slides->sortBy('slide_number') as $slide)
        @if(Auth::user()->admin)
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['method' => 'DELETE', 'action' => ['SlidesController@destroy', $slide]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                        <a href="/{{$slide->image_path}}" class="swipebox">
                            <img src="/{{$slide->thumbnail_path}}" alt="image">
                        </a>
                    </div>
                </div>

        @else
            <a href="/{{$slide->image_path}}" class="swipebox">
                <img src="/{{$slide->thumbnail_path}}" alt="image">
            </a>
        @endif

    @endforeach

    @if(Auth::user()->admin)

        <form action="/slideset/{{$slideset->id}}/slides" method="POST" class="dropzone">
            {{csrf_field()}}
        </form>
    @endif
@endsection

@section('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            /* Basic Gallery */
            $('.swipebox').swipebox();
        });
    </script>

    {{--Sends pageview google anaytics--}}
    <script>
        <?php
        $gasend = "ga('send', { hitType: 'pageview', title: 'Slide %s' , page: '/slide/%s' });";
        echo sprintf($gasend, $slideset->topic, $slideset->slide_set);
        ?>
    </script>

@endsection
