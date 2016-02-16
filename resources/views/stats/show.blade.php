@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'y','Sales', 'Expenses', 'Profit'],
                ['2014', 1000, 400, 200, 100],
                ['2015', 1170, 460, 250, 10],
                ['2016', 660, 1120, 300, 10],
                ['2017', 1030, 540, 350, 140 ]
            ]);

            var options = {
                chart: {
                    title: 'Company Performance',
                    subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, options);
        }
    </script>
@endsection

@section('content')
    <div class="page-header">
        <h1>Stats</h1>
    </div>
    <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
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