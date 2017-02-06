@extends('app')

@section('content')
    <div class="page-header">
        <h2>{{$peerevaluation->name}}</h2>
    </div>

    @if($peerevaluation->submissions->isEmpty())
        <div class="well">
            <p>No submissions linked to evaluation yet.</p>
        </div>
    @else
        <div class="panel panel-default">
            <!-- Users Table -->
            <table class="table">
                <tr>
                    <th>Delete</th>
                    <th>Submission</th>
                </tr>
                @foreach($peerevaluation->submissions as $submission)
                    <tr>
                        <td>
                            <a href="{{ action('PeerEvaluationsController@deleteLink', [$peerevaluation, $submission]) }}"
                               class="btn btn-default btn-sm"><span class="glyphicon glyphicon-remove"
                                                                    aria-hidden="true"></span>
                            </a>
                        </td>
                       <td> {{$submission->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
    <hr>

    <h3>Link to submissions</h3>

    <div class="panel panel-default">
        <!-- Users Table -->
        <table class="table">
            <tr>
                <th>Add</th>
                <th>Submission</th>

            </tr>
            @foreach($inclassSubmissions as $submission)
                <tr>
                    <td>
                        <a href="{{ action('PeerEvaluationsController@storeLink', [$peerevaluation, $submission]) }}" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                       {{$submission->name}}
                    </td>

                </tr>
            @endforeach

        </table>
    </div>

@endsection
