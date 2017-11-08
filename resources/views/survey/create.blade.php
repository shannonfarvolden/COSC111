@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Create Survey</h1>
    </div>
    @include('partials.error')
    {!! Form::open(['url' => 'survey']) !!}
    @include('survey.createform', ['submitButtonText' => 'Create Survey'])
    {!! Form::close() !!}

@endsection
@section('footer')
    <script>

        var j = 0;
        $("div.panel-body").on('click', '#addquestion', function() {
            var question = $(".question");
            var i = question.index(question.last())+1;
            console.log(i);

            $( '.questions' ).append("<div class=\"form-group><label for=\"question["+i+"]\">Question "+(i+1)+"</label><input type=\"text\" class=\"question form-control\" name=\"question["+i+"]\"><hr>");

            "<button type=\"button\" id=\"addanswer\" class=\"btn btn-default\">Add Answer</button></div>"
        });
        $("div.panel-body").on('click', '#removequestion', function() {
            console.log($(".question").last().parent('.question-group'));
            $(".question").last().parent('.question-group').remove();

        });
        $("div.questions").on('click', '#addanswer', function() {
            console.log('hit');
        });
        $("div.questions").on('click', '#removeanswer', function() {
            console.log('hit');
        });

    </script>
@endsection