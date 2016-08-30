@extends('app')

@section('content')
    <div class="jumbotron">
        <h1>Slides</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('SlideSetsController@create') }}" class=" btn btn-primary margin-button"> Create Slide
            Set</a>
    @endif
    @foreach($slidesets->groupBy('week') as $week)

        <div class="page-header">
            <h1>Week {{$week->first()->week}}</h1>
        </div>
        <div class="col-md-4">
            <h3>Topics</h3>
            @if(!$week->where('category','topic')->isEmpty())
                @foreach($week->where('category','topic')->sortBy('created_at') as $slideset)
                   @include('slideset.partials.panel', ['slideset'=>$slideset])
                @endforeach
            @endif
        </div>
        <div class="col-md-4">
            @if(!$week->where('category','summary')->isEmpty())
                <h3>Summary</h3>
                @foreach($week->where('category','summary')->sortBy('created_at') as $slideset)
                    @include('slideset.partials.panel', ['slideset'=>$slideset])
                @endforeach
            @endif
        </div>
        <div class="col-md-4">
            @if(!$week->where('category','exercise')->isEmpty())
                <h3>Exercises</h3>
                @foreach($week->where('category','exercise')->sortBy('created_at') as $slideset)
                    @include('slideset.partials.panel', ['slideset'=>$slideset])
                @endforeach
            @endif
        </div>
    @endforeach

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Slide Set',
            page: '/slideset'
        });
    </script>
@endsection