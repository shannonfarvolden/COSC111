@extends('app')

@section('content')
    <div class="page-header">
        <h1>Discussion Forum</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'GET', 'class'=>'col-md-4']) !!}
        <div class="form-group">
            {!! Form::label('category', 'Filter By Category') !!}
            {!! Form::select('category', ['All'=>'All','Assignments'=>'Assignments', 'Exams'=>'Exams', 'Lecture Material'=>'Lecture Material','Labs'=>'Labs', 'Complaints and Feedback' => 'Complaints and Feedback', 'Other'=>'Other'], null, ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Filter', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <hr>
    <a href="{{ action('ThreadsController@create') }}" class=" btn btn-primary margin-button"> Create Thread </a>
    @foreach( $threads as $thread)
        <a style="color:black; text-decoration:none" href="{{ action('ThreadsController@show', [$thread]) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        @if($thread->starred)
                            <span class="col-md-1 glyphicon glyphicon-star thread-star" aria-hidden="true"></span>
                        @endif

                        @if( Auth::user()->threadsRead->contains('thread_id', $thread->id))
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
                    @if(Auth::user()->threadsRead->contains('thread_id', $thread->id))
                        @if(!Auth::user()->threadsRead()->where('thread_id',$thread->id)->get()->first()->thread->replies->isEmpty())
                            @if(Auth::user()->threadsRead()->where('thread_id',$thread->id)->get()->first()->thread->replies->last()->created_at > Auth::user()->threadsRead()->where('thread_id',$thread->id)->get()->first()->updated_at)
                                <span class="label label-primary">New Reply</span>
                            @endif
                        @endif
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