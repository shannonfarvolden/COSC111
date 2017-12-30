@extends('app')
@section('head')
    <meta name="csrf-token" content="{{csrf_token()}}">
@endsection
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
                        <td>
                            <p id="mark-{{$user->id}}"></p>
                            <button id="button-{{$user->id}}" type="button" class="btn btn-default" data-toggle="modal" data-target="#gradeModel" data-modal="create" data-submission="{{$submission->id}}" data-user="{{$user->id}}" data-feedback data-mark>Create Grade</button>
                        </td>
                    @else
                        <td>
                            <p id="mark-{{$user->id}}">{{$mark = $user->grades->whereLoose('submission_id', $submission->id)->last()->mark}}</p>
                            <button id="button-{{$user->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#gradeModel" data-modal="edit" data-user="{{$user->id}}" data-grade="{{$user->grades->whereLoose('submission_id', $submission->id)->last()->id}}" data-feedback="{{$user->grades->whereLoose('submission_id', $submission->id)->last()->feedback}}" data-mark="{{$mark}}">Edit Grade</button>
                        </td>
                    @endif
                </tr>
            @endforeach
            <div class="modal fade" id="gradeModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Edit Grade</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {!! Form::label('feedback', 'Feedback') !!}
                                {!! Form::textarea('feedback', null, ['class'=>'form-control', 'id'=>'feedback', 'rows' => 3]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('mark', 'Mark') !!}
                                {!! Form::text('mark', null, ['class'=>'form-control', 'id'=>'mark']) !!}
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-default" id="submit-modal" data-dismiss="modal" data-user data-modal data-submission data-grade>Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>


@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('#gradeModel').on('show.bs.modal', function (event) {
                console.log("hit show");
                var button = $(event.relatedTarget); // Button that triggered the modal
                // Extract info from data-* attributes
                var modal = button.data('modal');
                var mark = button.data('mark'); // Extract info from data-* attributes
                var feedback = button.data('feedback');
                var user = button.data('user');

                var container = $(this);
                container.find('#submit-modal').data('user', user);
                container.find('#feedback').val(feedback);
                container.find('#mark').val(mark);
            });

            $(".modal").on("click", "#submit-modal", function(e){
                var user = $(e.target).data('user');
                var form = $(e.target).closest(".modal-content");
                var button = $('#button-'+user)
                var modal = button.data('modal');
                var url = "/admin/mark/";
                if (modal == "edit"){
                    var grade = button.data('grade');
                    url = url + grade;
                }
                else{
                    var submission = button.data('submission');
                    url = url + submission + "/" + user;
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: url,
                    data: {
                        feedback: form.find('#feedback').val(),
                        mark: form.find('#mark').val()
                    }
                }).success(function(data){
                    // change mark displayed
                    $("#mark-"+user).text(data.mark);
                    button.data('mark', data.mark);
                    button.data('feedback', data.feedback);
                   if(modal == "create"){
                        button.data('modal', 'edit');
                        button.data('grade', data.id);
                        //change to edit button
                        button.text('Edit Grade');
                        //change edit colour
                        button.removeClass('class', "btn-default");
                        button.addClass("btn-primary");
                    }

                }).error(function(msg){
                    alert("Error: " + msg.statusText);
                });
            });
        });
    </script>
@endsection