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
                <th>Status</th>
                <th>Feedback</th>
            </tr>
            @foreach($grades as $grade)
                <tr>
                    <td>{{$grade->name}}</td>
                    @if($grade->mark && $grade->total ) <td>{{$grade->mark}}/{{$grade->total}}</td>
                    @else <td> - / - </td>
                    @endif
                    <td>{{$grade->status}}</td>
                    <td>{{$grade->feedback}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection