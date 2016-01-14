@extends('app')

@section('content')
    <div class="page-header">
        <h1>My Grades</h1>
    </div>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Grades</div>


        <!-- Table -->
        <table class="table">
            <tr>
                <th>Item</th>
                <th>Mark</th>
                <th>Feedback</th>
            </tr>
            @foreach($grades as $grade)
                <tr>
                    <td>{{$grade->submission->name}}</td>
                    <td>{{$grade->mark}}/{{$grade->submission->total}}</td>
                    <td>{!! nl2br($grade->feedback) !!}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Grades',
            page: '/grade'
        });
    </script>
@endsection