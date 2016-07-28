@extends('app')

@section('content')
    <div class="jumbotron">
        <h1>Slides</h1>
    </div>

    @foreach($weeks as $week)

        <div class="page-header">
            <h1>Week {{$week->lecture}}</h1>
        </div>
        @foreach(App\Slide::slideSet($week->lecture)->get()->unique('slide_set') as $slideset)
            <a href="{{ action('SlidesController@show', $slideset->slide_set) }}">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h7>{{$slideset->topic}}</h7>
                    </div>
                </div>
            </a>
        @endforeach
    @endforeach

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Slides',
            page: '/slide'
        });
    </script>
@endsection