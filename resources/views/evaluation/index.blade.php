@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Evaluation Criteria</h1>
    </div>
    <div class="text-center">
    <a href="{{ action('EvaluationsController@create') }}" class="btn btn-primary margin-button"> Add Evaluation
        Criteria </a>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="panel panel-default">
                <!-- Evaluation Criteria Table -->
                <table class="table">
                    <tr>
                        <th>Percent of Grade</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @if($evaluations->isEmpty())
                        <tr>
                            <td colspan=4 align=center>No Evaluation Criteria in database</td>
                        </tr>
                    @else
                        @foreach($evaluations as $evaluation)
                            <tr>
                                <td>{{$evaluation->grade}}</td>
                                <td>{{$evaluation->category}}</td>
                                <td><a href="{{action('EvaluationsController@edit', [$evaluation])}}" class=" btn btn-info"> Edit</a></td>
                                <td> {!! Form::open(['method' => 'DELETE', 'action' => ['EvaluationsController@destroy', $evaluation], 'style' => 'display:inline;']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onClick'=>"return confirm('Delete this evaluation?')"]) !!}
                                    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <p>Total: {{$total}}</p>
        </div>

    </div>

@endsection
