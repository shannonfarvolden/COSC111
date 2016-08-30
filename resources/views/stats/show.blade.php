@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Submission', 'Your Grade', 'Class Average'],
                    @foreach($grades as $grade)
                    ['{{$grade->submission->name}}', {{$grade->mark/$grade->submission->total*100}}, {{$grade->submission->average()}}],
                @endforeach
            ]);
            var options = {
                chart: {
                    title: 'Grades vs. Class Average'
                },
                /*
                vAxis: {
                    title: 'Test1',
                    viewWindow: {
                        min:0,
                        max:100
                    }
                }
                xAxis: {
                    title: 'Test2'
                }
                */
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart'));

            chart.draw(data, options);
        }
    </script>

@endsection

@section('content')
    <div class="jumbotron">
        <h2>Stats</h2>
    </div>

    @if(!$grades->isEmpty())
        <div id="columnchart" style="width: 900px; height: 500px"></div>
    @else
        <h3>You have marks to show stats on yet.</h3>
    @endif

@endsection

@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Stats',
            page: '/stats'
        });
    </script>
@endsection