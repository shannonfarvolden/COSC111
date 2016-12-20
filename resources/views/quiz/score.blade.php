@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quiz Completed</h1>
    </div>
    <h3>Your score was: {{$answers->whereLoose('correct',1)->count()}}/10 Attempt #{{$attempt}}</h3>

    @foreach($answers as $count=>$answer)
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$count+1}}) {{$answer->question->question}}</pre>
                @if($answer->correct)
                    <span class="col-md-1 glyphicon glyphicon-ok" aria-hidden="true"></span>
                @else
                    <span class="col-md-1 glyphicon glyphicon-remove" aria-hidden="true"></span>
                @endif
                <p>{{$answer->answer}}</p>
            </div>
        </div>
    @endforeach

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Quiz',
            page: '/quiz'
        });
    </script>
@endsection