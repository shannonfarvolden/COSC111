@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([

                ['Submission', 'Average', 'Your Mark'],

                <?php foreach($labs as $lab):?>
                    <?php if($lab->grades->count()>0): ?>
                       ['<?=$lab->name?>', <?=($lab->grades->sum('mark')/$lab->grades->count())/$lab->total * 100?>, <?= ($lab->grades->whereLoose('user_id', Auth::id())->isEmpty())? 0: $lab->grades->whereLoose('user_id', Auth::id())->first()->mark/$lab->total * 100 ?>],
                    <?php endif;?>
                <?php endforeach;?>

                <?php foreach($assignments as $assignment):?>
                    <?php if($assignment->grades->count()>0): ?>
                        ['<?=$assignment->name?>', <?=($assignment->grades->sum('mark')/$lab->grades->count())/$assignment->total * 100?>, <?= ($assignment->grades->whereLoose('user_id', Auth::id())->isEmpty())? 0: $assignment->grades->whereLoose('user_id', Auth::id())->first()->mark/$assignment->total * 100 ?>],
                    <?php endif;?>
               <?php endforeach;?>
            ]);

            var options = {
                title: 'Company Performance',
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

    <div class="page-header">
        <h3>Marks</h3>
    </div>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>



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