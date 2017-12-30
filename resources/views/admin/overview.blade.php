@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Overview</h1>
    </div>
    <div class="panel panel-default">
        <!-- Table -->
        <table class="table">
            <tr>
                <th>Category</th>
                <th>Min</th>
                <th>Max</th>
                <th>Median</th>
                <th>Average</th>
                <th># Red Flags</th>
                <th># Yellow Flags</th>
                <th># Green Flags</th>
            </tr>

            @foreach($evaluationsRisk as $evaluation)
                <tr>
                    <td>{{$evaluation['category']}}</td>
                    <td>{{$evaluation['min']}}</td>
                    <td>{{$evaluation['max']}}</td>
                    <td>{{$evaluation['median']}}</td>
                    <td>{{$evaluation['average']}}</td>
                    <td><a href="{{action('AdminController@risk',['$evaluation'=>$evaluation['id'],'level'=>'danger'])}}">{{$evaluation['danger']}}</a></td>
                    <td><a href="{{action('AdminController@risk',['$evaluation'=>$evaluation['id'],'level'=>'warning'])}}">{{$evaluation['warning']}}</a></td>
                    <td><a href="{{action('AdminController@risk', ['$evaluation'=>$evaluation['id'],'level'=>'success'])}}">{{$evaluation['success']}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection