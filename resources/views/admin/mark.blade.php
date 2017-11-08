@extends('app')

@section('content')
    <a href="{{ action('SubmissionsController@index') }}"><span class="glyphicon glyphicon-menu-left"
                                                                aria-hidden="true"></span>Back to Submissions</a>
    <div class="page-header center-title">
        <h1>Add Grades</h1>
    </div>
    @include('admin.partials.filter')

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3 class="panel-title">{{$submission->name}} | Out of {{$submission->total}} pts</h3>
        </div>
        <!-- Table -->
        <table class="table table-mark">
            <tr>
                <th class="sm-column">Last Name</th>
                <th class="sm-column">First Name</th>
                <th class="sm-column">Student Number</th>
                <th class="sm-column">Lab Section</th>
                <th class="md-column">Submission Date</th>
                <th class="lg-column">Files Submitted</th>
                <th class="xl-column">Latest Attempt Comments</th>
                <th class="lg-column">Mark</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->student_number}}</td>
                    <td>{{$user->lab}}</td>
                    @if(!$user->submissions()->where('id', $submission->id)->get()->isEmpty())
                        <td>{{$user->submissions()->where('id', $submission->id)->get()->last()->pivot->created_at}}</td>


                        <td>
                            @foreach($user->submissions()->where('id', $submission->id)->get() as $submission)
                                <p>Attempt: {{$submission->pivot->attempt}}
                                    <a href="/{{$submission->pivot->file_path}}">{{$submission->pivot->file_name}}</a>
                                </p>
                            @endforeach
                        </td>
                        <td class="comments">
                            {!! nl2br($user->submissions->whereLoose('id', $submission->id)->last()->pivot->comments) !!}
                        </td>
                    @else
                        <td>No Submission</td>
                        <td>No Submission</td>
                        <td>No Submission</td>
                    @endif
                    @if($user->grades->whereLoose('submission_id', $submission->id)->isEmpty())
                        <td id="student_mark">
                            <a href="{{action('GradesController@create', [$submission, $user])}}"
                               class="btn btn-default">Add
                                Grade </a>
                            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createGradeModel">Add Grade</button>--}}
                            {{--<div class="modal fade" id="createGradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">--}}
                                {{--<div class="modal-dialog" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
                                                        {{--aria-hidden="true">&times;</span></button>--}}
                                            {{--<h4 class="modal-title" id="exampleModalLabel">Add Grade</h4>--}}
                                        {{--</div>--}}
                                        {{--{!! Form::open([ 'action' => ['GradesController@store', $submission, $user]]) !!}--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('feedback', 'Feedback') !!}--}}
                                                {{--{!! Form::textarea('feedback', null, ['class'=>'form-control', 'rows' => 3]) !!}--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('mark', 'Mark') !!}--}}
                                                {{--{!! Form::text('mark', null, ['class'=>'form-control']) !!}--}}
                                            {{--</div>--}}

                                        {{--</div>--}}
                                        {{--<div class="modal-footer">--}}
                                            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                            {{--<button type="submit" class="btn btn-default" data-dismiss="modal" data-user_id="{{$user->id}}" data-submission_id="{{$submission->id}} ">Save</button>--}}
                                        {{--</div>--}}
                                        {{--{!! Form::close() !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </td>
                    @else
                        <td id="student_mark">
                            {{$mark = $user->grades->whereLoose('submission_id', $submission->id)->last()->mark}}
                            <br>
                            <a href="{{action('GradesController@edit', [$submission, $user])}}"
                                   class="btn btn-info">Edit
                                Grade </a>
                            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editGradeModel">Edit Grade</button>--}}
                            {{--<div class="modal fade" id="editGradeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">--}}
                                {{--<div class="modal-dialog" role="document">--}}
                                    {{--<div class="modal-content">--}}
                                        {{--<div class="modal-header">--}}
                                            {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span--}}
                                                        {{--aria-hidden="true">&times;</span></button>--}}
                                            {{--<h4 class="modal-title" id="exampleModalLabel">Edit Grade</h4>--}}
                                        {{--</div>--}}
                                        {{--{!! Form::model($grade = $user->grades->whereLoose('submission_id', $submission->id)->last(), ['method' => 'PATCH', 'action' => ['GradesController@update', $grade->id]]) !!}--}}
                                        {{--<div class="modal-body">--}}
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('feedback', 'Feedback') !!}--}}
                                                {{--{!! Form::textarea('feedback', null, ['class'=>'form-control', 'id'=>'feedback', 'rows' => 3]) !!}--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--{!! Form::label('mark', 'Mark') !!}--}}
                                                {{--{!! Form::text('mark', null, ['class'=>'form-control', 'id'=>'mark']) !!}--}}
                                            {{--</div>--}}

                                        {{--</div>--}}
                                        {{--<div class="modal-footer">--}}
                                            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                            {{--<button type="submit" id="submit" class="btn btn-default" data-dismiss="modal" data-grade="{{$grade->id}}" data-feedback=""data-mark="{{$mark}}">Save</button>--}}
                                        {{--</div>--}}
                                        {{--{!! Form::close() !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>


@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('#editGradeModel').on('show.bs.modal', function (event) {
                console.log("hit edit");
                var button = $(event.relatedTarget); // Button that triggered the modal
                var grade = button.data('grade'); // Extract info from data-* attributes
                var mark = button.data('mark'); // Extract info from data-* attributes
                console.log(grade);
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this);
                //modal.find('#feedback').val();
                modal.find('#mark').val(mark);
            })
            $('button#submit').click(function(){
                console.log("hit")
            })
//            $('form').on('submit', function (e) {
//                console.log('hit create');
//
//            });
//            $('form').on('submit', function (e) {
//                console.log('hit edit');
//            });
        });
    </script>
@endsection