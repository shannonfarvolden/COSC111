@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slide Set {{$slide_set}}</h1>
    </div>


        @foreach($slides as $slide)
            <a href="/{{$slide->image_path}}" class="swipebox" >
                <img src="/{{$slide->thumbnail_path}}" alt="image">
            </a>
        @endforeach

@endsection

@section('footer')

    <script type="text/javascript">
        $( document ).ready(function() {
            /* Basic Gallery */
            $( '.swipebox' ).swipebox();
        });
    </script>
@endsection