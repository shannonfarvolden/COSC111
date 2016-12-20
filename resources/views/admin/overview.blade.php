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

            @foreach($evaluations as $evaluation)
                @if(!$evaluation->evalEmpty())
                    <tr>
                        <td>{{$evaluation->category}}</td>
                        <td>{{$evaluation->evalMin()}}</td>
                        <td>{{$evaluation->evalMax()}}</td>
                        <td>{{$evaluation->evalMedian()}}</td>
                        <td>{{$evaluation->evalAvg()}}</td>
                        <td><a href="{{action('AdminController@risk',['$evaluation'=>$evaluation,'level'=>'danger'])}}">{{$evaluation->risk('danger')->count()}}</a></td>
                        <td><a href="{{action('AdminController@risk',['$evaluation'=>$evaluation,'level'=>'warning'])}}">{{$evaluation->risk('warning')->count()}}</a></td>
                        <td><a href="{{action('AdminController@risk', ['$evaluation'=>$evaluation,'level'=>'success'])}}">{{$evaluation->risk('success')->count()}}</a></td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>

@endsection