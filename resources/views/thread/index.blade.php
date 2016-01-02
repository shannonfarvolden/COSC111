@extends('app')

@section('content')
    <div class="page-header">
        <h1>Discussion Forum</h1>
    </div>

    <div class="row">
        {!! Form::open(['method' => 'GET', 'class'=>'col-md-4']) !!}
            <div class="form-group">
                {!! Form::label('category', 'Filter By Category') !!}
                {!! Form::select('category', ['All'=> 'All','Inheritance'=>'Inheritance', 'Interface'=>'Interface', 'Abstract'=>'Abstract', 'Linked Lists'=>'Linked Lists', 'Other'=>'Other'], null, ['class' => 'form-control']) !!}

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
                    <p>{{$thread->title}}</p>
                    <p class="text-right">{{$thread->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </a>
    @endforeach

    <a href="{{ action('ThreadsController@create') }}" class=" btn btn-primary"> Create Thread </a>
@endsection
