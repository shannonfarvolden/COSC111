@extends('app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ["corechart", "bar"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
//            var data = google.visualization.arrayToDataTable([
//                ['Quizzes', 'y','Sales', 'Expenses', 'Profit'],
//                ['Quiz 1', 1000, 400, 200, 100],
//                ['Quiz 2', 1170, 460, 250, 10],
//                ['Quiz 3', 660, 1120, 300, 10],
//                ['Quiz 4', 1030, 540, 350, 140 ]
//            ]);
//
//            var options = {
//                chart: {
//                    title: 'Company Performance',
//                    subtitle: 'Sales, Expenses, and Profit: 2014-2017',
//                }
//            };
//
//            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
//
//            chart.draw(data, options);
            var data1 = google.visualization.arrayToDataTable([
                ['Question', 'Number of Students'],
                ['< 2 hours', {{$survey2->whereLoose('question_1', 1)->count()}}],
                ['2-4 hours', {{$survey2->whereLoose('question_1', 2)->count()}}],
                ['4-6', {{$survey2->whereLoose('question_1', 3)->count()}}],
                ['6-8', {{$survey2->whereLoose('question_1', 4)->count()}}],
                ['>8', {{$survey2->whereLoose('question_1', 5)->count()}}]

            ]);

            var options1 = {
                title: 'Question 1: Roughly, the number of hours that I spent studying for this midterm was:',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization1 = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            visualization1.draw(data1, options1);

            var data2 = google.visualization.arrayToDataTable([
                ['Question', 'Number of Students'],
                ['Read the lecture notes', {{$survey2->whereLoose('question_2', 1)->count()}}],
                ['Read and worked through the examples in the lecture notes ', {{$survey2->whereLoose('question_2', 2)->count()}}],
                ['Didn’t look at the lecture notes.', {{$survey2->whereLoose('question_2', 3)->count()}}]
            ]);

            var options2 = {
                title: 'Question 2: As part of my test preparation for this midterm, I:',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization2 = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
            visualization2.draw(data2, options2);

            var data3 = google.visualization.arrayToDataTable([
                ['Question', 'Number of Students'],
                ['Reviewed labs and assignments.', {{$survey2->whereLoose('question_5', 1)->count()}}],
                ['Attempted some exercises in the labs and assignments again', {{$survey2->whereLoose('question_5', 2)->count()}}],
                ['Did not consider studying from labs/assignments.', {{$survey2->whereLoose('question_5', 3)->count()}}],

            ]);

            var options3 = {
                title: 'Question 3: As part of my test preparation for this midterm I :',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization3 = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
            visualization3.draw(data3, options3);

            var data4 = google.visualization.arrayToDataTable([
                ['Question', 'Number of Students'],
                ['Read the quiz questions (without doing them)', {{$survey2->whereLoose('question_5', 1)->count()}}],
                ['Practiced doing the quizzes online. ', {{$survey2->whereLoose('question_5', 2)->count()}}],
                ['Chose not to study using the quizzes. ', {{$survey2->whereLoose('question_5', 3)->count()}}],

            ]);

            var options4 = {
                title: 'Question 4: As part of my test preparation for this midterm I :',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization4 = new google.visualization.ColumnChart(document.getElementById('chart_div4'));
            visualization4.draw(data4, options4);

            var data10 = google.visualization.arrayToDataTable([
                ['Quiz', 'Score (%)'],
                {{--['Quiz 1', {{$quizzes->whereLoose('number', 1)->count()}}],--}}
                {{--['Quiz 2 ', {{$quizzes->whereLoose('number', 2)->count()}}],--}}
                {{--['Quiz 3', {{$quizzes->whereLoose('number', 3)->count()}}],--}}
                {{--['Quiz 4', {{$quizzes->whereLoose('number', 4)->count()}}],--}}
                {{--['Quiz 5', {{$quizzes->whereLoose('number', 5)->count()}}],--}}
                {{--['Quiz 6', {{$quizzes->whereLoose('number', 6)->count()}}]--}}
                <?php foreach($quizzes as $quiz):?>
                    ['<?=$quiz->name?> Attempt #<?=$quiz->pivot->attempt?>', <?=$quiz->pivot->score/10 * 100?>],
                <?php endforeach;?>
            ]);

            var options10 = {
                title: 'Quiz Scores ',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization10 = new google.visualization.ColumnChart(document.getElementById('chart_div10'));
            visualization10.draw(data10, options10);

            var data11 = google.visualization.arrayToDataTable([
                ['Submissions', 'Mark (%)'],
                <?php foreach($grades as $grade):?>
                    ['<?=$grade->submission->name?>', <?=$grade->mark/$grade->submission->total * 100?>],
                <?php endforeach;?>

            ]);

            var options11 = {
                title: 'Submission Marks',
                colors: ['green'],
                histogram: {hideBucketItems: true},
            };

            var visualization11 = new google.visualization.ColumnChart(document.getElementById('chart_div11'));
            visualization11.draw(data11, options11);
        }


    </script>
@endsection

@section('content')
    <div class="jumbotron">
        <h2>Stats</h2>
    </div>

    <div class="page-header">
        <h3>Surveys</h3>
    </div>

    {{--<div id="columnchart_material" style="width: 900px; height: 500px;"></div>--}}
    <div class="row">
        <div class="col-md-4">
            <div id="chart_div" style="width: 400px; height: 250px;"></div>
        </div>
        <div class="col-md-4">
            <div id="chart_div2" style="width: 400px; height: 250px;"></div>
        </div>
        <div class="col-md-4">
            <div id="chart_div3" style="width: 400px; height: 250px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div id="chart_div4" style="width: 400px; height: 250px;"></div>
        </div>

    </div>
    <div class="page-header">
        <h3>Personal Stats</h3>
    </div>
    <div id="chart_div10" style="width: 400px; height: 250px;"></div>
    <div id="chart_div11" style="width: 400px; height: 250px;"></div>

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