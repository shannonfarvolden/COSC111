@extends('app')

@section('content')

    <div class="page-header">
        <h1>{{$survey->name}}</h1>
    </div>
    @foreach($survey->questions as $i=>$question)
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Question {{$i+1}}</div>
            <div class="panel-body">
                <p>{{$question->question}}</p>
            </div>

            <!-- Table -->
            <table class="table">
                <tr>
                    <th>Answer</th>
                    <th>Student Count</th>
                    <th>Percentage</th>
                </tr>
                @foreach($question->answers as $answer)
                    <tr>
                        <td>{{$answer->answer}}</td>
                        <td>{{$answer->users()->students()->get()->count()}}</td>
                        <td>{{($survey->users()->students()->get()->unique('user_id')->count()>0)?round($answer->users()->students()->get()->count()/$survey->users()->students()->get()->unique('id')->count(),4)*100:0}}
                            %
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach

@endsection
@section('footer')

    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Survey',
            page: '/survey'
        });
    </script>

@endsection