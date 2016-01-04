@extends('app')

@section('content')
    <div class="page-header">
        <h1>Discussion Forum</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'GET', 'class'=>'col-md-4']) !!}
        <div class="form-group">
            {!! Form::label('category', 'Filter By Category') !!}
            {!! Form::select('category', ['All'=>'All','Assignments'=>'Assignments', 'Exams'=>'Exams', 'Lecture Material'=>'Lecture Material','Lab Questions'=>'Lab Questions', 'Complaints and Feedback' => 'Complaints and Feedback', 'Other'=>'Other'], null, ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Filter', ['class' => 'btn btn-sm btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <hr>

    @foreach( $threads as $thread)
        <a style="color:black; text-decoration:none" href="{{ action('ThreadsController@show', [$thread]) }}">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">{{$thread->title}}</div>
                        <div class="col-md-2 col-md-offset-8 text-right">Replies <span class="badge">{{$thread->replies->count()}}</span></div>
                    </div>
                    <p class="text-right">{{$thread->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </a>
    @endforeach

    <a href="{{ action('ThreadsController@create') }}" class=" btn btn-primary margin-footer"> Create Thread </a>

@endsection
