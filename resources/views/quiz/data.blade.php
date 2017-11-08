@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Quiz', 'Users taken quiz'],
                @foreach($quizzes as $quiz)
                ['{{$quiz->name}}', {{$quiz->users->count()}}],
                @endforeach
            ]);
            var options = {
                chart: {
                    title: 'Number of users taken quiz'
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart'));

            chart.draw(data, options);
        }
    </script>

@endsection

@section('content')
    <div class="page-header">
        <h2>Quiz Data</h2>
    </div>
    <br>
    @if(!$quizzes->isEmpty())
        <div id="columnchart" style="width: 900px; height: 500px"></div>
    @else
        <h3>No Quizzes created.</h3>
    @endif

@endsection
