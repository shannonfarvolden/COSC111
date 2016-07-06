@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([

                ['Submission', 'Average'],
                    @foreach($labs as $lab)
                        @if($lab->grades->count()>0)
                            ['{{$lab->name}}', {{($lab->grades->sum('mark')/$lab->grades->count())/$lab->total * 100}}],
                    @endif
                @endforeach
                @foreach($inClasses as $inClass)
                    @if($inClass->grades->count()>0)
                        ['{{$inClass->name}}', {{($inClass->grades->sum('mark')/$inClass->grades->count())/$inClass->total * 100}}],
                    @endif
                @endforeach
                @foreach($assignments as $assignment)
                    @if($assignment->grades->count()>0)
                        ['{{$assignment->name}}', {{($assignment->grades->sum('mark')/$assignment->grades->count())/$assignment->total * 100}}],
                    @endif
                @endforeach
                @foreach($midterms as $midterm)
                    @if($midterm->grades->count()>0)
                        ['{{$midterm->name}}', {{($midterm->grades->sum('mark')/$midterm->grades->count())/$midterm->total * 100}}],
                    @endif
                @endforeach
                @foreach($surveys as $survey)
                    @if($survey->grades->count()>0)
                        ['{{$survey->name}}', {{($survey->grades->sum('mark')/$survey->grades->count())/$survey->total * 100}}],
                @endif
            @endforeach
        ]);

            var options = {
                title: 'Average',
                curveType: 'function',
                legend: {position: 'bottom'}
            };
            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }


    </script>
@endsection

@section('content')
    <div class="jumbotron">
        <h2>Stats</h2>
    </div>
    <div class="panel panel-default">

        <table class="table">
            <tr>
                <td>
                    @if(!$submissions->isEmpty())
                        <div id="curve_chart" style="display: block; margin: 0 auto; width: 900px; height: 500px"></div>
                    @else
                        <h3>No submissions to show stats on yet.</h3>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <iframe width="650" height="400" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1hymCmLRyeQjdaja-v0xPg45aAaSMFMce8vQNIGVD_Qs/pubchart?oid=941886812&amp;format=interactive"></iframe>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <iframe width="675" height="400" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1hymCmLRyeQjdaja-v0xPg45aAaSMFMce8vQNIGVD_Qs/pubchart?oid=437415473&amp;format=interactive"></iframe>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <iframe width="650" height="400" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/1hymCmLRyeQjdaja-v0xPg45aAaSMFMce8vQNIGVD_Qs/pubchart?oid=1464334678&amp;format=interactive"></iframe>
                </td>
            </tr>
        </table>
    </div>
    {{--<table class="table">--}}
    {{--<tr>--}}
    {{--<td>User id</td>--}}
    {{--<td>Number of Threads</td>--}}
    {{--<td>User id</td>--}}
    {{--<td>Number of Replies</td>--}}
    {{--<td>User id</td>--}}
    {{--<td>Number of quizzes</td>--}}
    {{--<td>Sum of quizzes</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--@foreach ($users as $user)--}}
    {{--{{$sum = 0}}--}}
    {{--echo ($user->id.', '.$user->quizzes->count().", ");--}}
    {{--@foreach($user->quizzes as $quiz)--}}
    {{--{{$sum = $sum + $quiz->pivot->score}}--}}
    {{--<td>{{$sum}}</td>--}}
    {{--@endforeach--}}
    {{--@endforeach--}}
    {{--<td>Row 2, Column 1</td>--}}
    {{--<td>Row 2, Column 2</td>--}}
    {{--</tr>--}}
    {{--</table>--}}
@endsection