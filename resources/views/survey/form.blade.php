
<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Survey Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>
            <div class="questions"></div>

            {{--@for($i = 1; $i<=10; $i++)--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('question['.$i.']', 'Question '.$i) !!}--}}
                    {{--{!! Form::text('question['.$i.']', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}

                {{--@for($j = 1; $j<=4; $j++)--}}
                    {{--<div class="row">--}}
                        {{--<div class="form-group col-md-offset-2 col-md-10">--}}
                            {{--{!! Form::label('option['.$i.']['.$j.']', 'Option '.$j) !!}--}}
                            {{--{!! Form::text('option['.$i.']['.$j.']', null, ['class' => 'form-control']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endfor--}}
            {{--@endfor--}}
            <button type="button" id="addquestion" class="btn btn-default btn-lg">Add Questions</button>
            <button type="button" id="removequestion" class="btn btn-default btn-lg">Remove Questions</button>
            <div class="form-group">
                {!! Form::label('active', 'Active Submission (students can see survey)') !!}
                {!! Form::checkbox('active') !!}
            </div>
            <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
