<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Survey Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>
            <div class="questions">
                @for($i = 0; $i<10; $i++)
                    <div class="question-group">
                        <div class="form-group">
                            {!! Form::label('question['.$i.']', 'Question '.($i+1)) !!}
                            {!! Form::text('question['.$i.']', null, ['class' => 'question form-control']) !!}
                        </div>
                        @for($j = 0; $j<4; $j++)
                            <div class="form-group col-md-offset-2 col-md-10">
                                {!! Form::label('option['.$i.']['.$j.']', 'Option '.($j+1)) !!}
                                {!! Form::text('option['.$i.']['.$j.']', null, ['class' => 'answer form-control']) !!}
                            </div>
                        @endfor

                        <button type="button" id="addanswer" class="btn btn-default btn"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Answer
                        </button>
                        <button type="button" id="removeanswer" class="btn btn-default btn"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span> Remove Answer
                        </button>
                        <hr>
                    </div>
                @endfor
            </div>
            <br>
            <button type="button" id="addquestion" class="btn btn-primary btn"><span class="glyphicon glyphicon-plus"
                                                                                     aria-hidden="true"></span> Add
                Question
            </button>
            <button type="button" id="removequestion" class="btn btn-primary btn"><span class="glyphicon glyphicon-plus"
                                                                                        aria-hidden="true"></span> Add
                Question
            </button>
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
