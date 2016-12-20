@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Create Survey</h1>
    </div>
    @include('partials.error')
    {!! Form::open(['url' => 'survey']) !!}
    @include('survey.form', ['submitButtonText' => 'Create Survey'])
    {!! Form::close() !!}

    {{--<button type="button" id="removequestion" class="btn btn-default btn-lg">Remove Questions</button>--}}

@endsection
@section('footer')
    <script>
        var i = 0;
        var j = 0;
        $( "#addquestion" ).click(function() {
            $( '.questions' ).append("<div class=\"form-group questionform"+i+"\"><label for=\"question["+i+"]\">Question "+(i+1)+"</label><input type=\"text\" class=\"form-control\" name=\"question["+i+"]\"> <button type=\"button\" id=\"addanswer\" class=\"btn btn-default\">Add Answer</button></div>");
            i=i+1;
        });

        $( "#removequestion" ).click(function() {
            i=i-1;
            $( ".questionform"+i ).remove();
        });
//        $( "#addanswer" ).click(function() {
//            $( '.questions' ).append("<div class=\"form-group questionform"+i+"\"><label for=\"question["+i+"]\">Question "+(i+1)+"</label><input type=\"text\" class=\"form-control\" name=\"question["+i+"]\"> <button type=\"button\" id=\"addanswer\" class=\"btn btn-default\">Add Answer</button></div>");
//            i=i+1;
//        });

    </script>
@endsection