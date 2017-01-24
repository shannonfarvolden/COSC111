@extends('app')

@section('content')
    <div class="page-header">
        <h1>Peer Evaluations</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('PeerEvaluationsController@create') }}" class=" btn btn-primary margin-button"> Create
            Evaluation </a>
    @endif

    @foreach($peerevaluations->whereLoose('active',1) as $peerevaluation)

        <div class="panel panel-default">
            <div class="panel-body">
                <p>{{$peerevaluation->name}}</p>
                <hr>
                @if(Auth::user()->admin)

                    <a href="{{action('PeerEvaluationsController@edit', $peerevaluation)}}"
                       class="btn btn-default">Edit Peer Eval Name </a>
                    {!! Form::open(['method' => 'DELETE', 'action' => ['PeerEvaluationsController@destroy', $peerevaluation], 'style' => 'display:inline;']) !!}
                    {!! Form::submit('Delete Peer Eval', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                @else
                    <a href="{{action('AssessmentsController@myEvals', [$peerevaluation, Auth::user()])}}"
                       class="btn btn-default">View My Evals</a>
                    <a href="{{action('AssessmentsController@team', ['peerevaluation'=>$peerevaluation->id, 'user'=>Auth::user()->id])}}"
                       class="btn btn-default">Create an evaluation for a team member</a>

                @endif

            </div>
        </div>

    @endforeach
    @if(Auth::user()->admin)
        @if(!$peerevaluations->whereLoose('active',0)->isEmpty())
            <hr>
            <div class="page-header">
                <h1>Non active Peer Evals</h1>
            </div>
            @foreach($peerevaluations->whereLoose('active',0) as $peerevaluation)

                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>{{$peerevaluation->name}}</p>
                        <hr>
                        @if(Auth::user()->admin)

                            <a href="{{action('PeerEvaluationsController@edit', $peerevaluation)}}"
                               class="btn btn-default">Edit Peer Eval Name </a>
                            {!! Form::open(['method' => 'DELETE', 'action' => ['PeerEvaluationsController@destroy', $peerevaluation], 'style' => 'display:inline;']) !!}
                            {!! Form::submit('Delete Peer Eval', ['class' => 'btn btn-default']) !!}
                            {!! Form::close() !!}
                        @else
                            <a href="{{action('AssessmentsController@myEvals', $peerevaluation)}}"
                               class="btn btn-default">View My Evals</a>
                            <a href="{{action('AssessmentsController@team', ['peerevaluation'=>$peerevaluation->id, 'user'=>Auth::user()->id])}}"
                               class="btn btn-default">Create an evaluation for a team member</a>

                        @endif

                    </div>
                </div>
            @endforeach
        @endif
    @endif

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Peer Evals',
            page: '/evals'
        });
    </script>
@endsection