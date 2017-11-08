@extends('app')

@section('content')
    <div class="page-header">
        <h1>Discussion Forum</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'GET', 'class'=>'col-md-4']) !!}
        <div class="form-group">
            {!! Form::label('category', 'Filter By Category') !!}
            {!! Form::select('category', ['All'=>'All','Assignments'=>'Assignments', 'Exams'=>'Exams', 'Lecture Material'=>'Lecture Material','Labs'=>'Labs', 'Complaints and Feedback' => 'Complaints and Feedback', 'Other'=>'Other'], old('category'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Filter', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <hr>
    @if(App\Setting::first()->exists() && App\Setting::first()->active_forum)
    <a href="{{ action('ThreadsController@create') }}" class=" btn btn-primary margin-button"> Create Thread </a>
    @endif
    @if(Auth::user()->admin)
        <a href="{{ action('ThreadsController@setting') }}" class=" btn btn-default margin-button"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
    @endif

    @foreach( $threads as $thread)
        <a style="color:black; text-decoration:none" href="{{ action('ThreadsController@show', [$thread]) }}">
            <div class="panel panel-default">
                <div class="panel-body {{Auth::user()->hasReadThread($thread)?'':'unread-colour' }}">
                    <div class="row">
                        @if($thread->starred)
                            <span class="col-md-1 glyphicon glyphicon-star thread-star" aria-hidden="true"></span>
                        @else
                            <div class="col-md-1"></div>
                        @endif

                        @if( Auth::user()->hasReadThread($thread))
                            <div class="col-md-8">{{$thread->title}}</div>
                        @else
                            <div class="col-md-8"><b>{{$thread->title}}</b></div>
                        @endif
                        <div class="col-md-2 col-md-offset-1 text-right">Replies <span class="badge">{{$thread->replies->count()}}</span></div>
                    </div>

                    @if($thread->replies->count()>0)
                        <p class="text-right"><b>Latest Reply: </b>{{$thread->replies->last()->created_at->diffForHumans()}}</p>
                    @endif
                        <p class="text-right"><b>Post Created: </b>{{$thread->created_at->diffForHumans()}}</p>
                    @include('threads.partials.star')
                    @if(Auth::user()->hasNewReply($thread))
                        <span class="label label-primary">New Reply</span>
                    @endif
                </div>
            </div>
        </a>
    @endforeach



@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Threads',
            page: '/thread'
        });
    </script>
@endsection