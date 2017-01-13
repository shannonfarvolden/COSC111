@inject('labs', 'App\Http\Utilities\Lab')

{!! Form::open(['method' => 'GET']) !!}
<div class="row">
    <div class="col-md-offset-2 col-md-4">
        <div class="form-group">
            {!! Form::label('filter', 'Filter') !!}
            {!! Form::select('filter', array_merge(['none'=>'None', 'file_submitted'=>'File Submitted'],$labs::all()), old('category'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('sort', 'Sort') !!}
            {!! Form::select('sort', ['none'=>'None','last_name'=>'Last Name', 'first_name'=>'First Name', 'student_number'=>'Student Number', 'submission_date'=>'Submission Date'], old('category'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('order', 'Order') !!}
            {!! Form::select('order', ['none'=>'None', 'asc'=>'Asc', 'desc'=>'Desc'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary col-md-offset-4 col-md-4']) !!}
{!! Form::close() !!}
<br>
<hr>