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

    @if(!$submissions->isEmpty())
        <div id="curve_chart" style="width: 900px; height: 500px"></div>
    @else
        <h3>No submissions to show stats on yet.</h3>
    @endif


@endsection