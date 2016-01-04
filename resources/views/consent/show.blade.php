@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="consent-body panel-body">
            <div class="page-header">
                <h1 class="consent-heading">Informed Consent</h1>
            </div>
            <p>
                You are invited to participate in a study that concerns how people interact educational software systems. As a
                participant in this study, you will be asked to complete a couple of short questionnaires at the beginning and
                end of the study and interact with a Computer Science web application.

                This statement contains information about the present study that is intended to help you decide whether you wish
                to participate in it.
                You may refuse to sign this form and not participate in this study. You should be aware that even after you
                signed, you are free to withdraw at any time.
                If you withdraw from this study, it will not affect your relationship with this unit, the people involved in the
                study, the services it may provide to you, or the University of British Columbia Okanagan. </p>

            <h5> If you have any questions about this study before, during, or after your participation, please feel free to
                direct them to:</h5>

            <p>Ashley Wong</p>

            <p>Email: ashwong1994@gmail.com</p>

            <h3 class="paragraph-heading">Study Objectives</h3>

            <p>The objective of this work is to develop educational software that help students learn effectively. The main part
                of the software is a web application which will track how you interact with various software components and
                display your learning progress. You may use the software as much or as little as you want during this study.</p>

            <h3>Risks</h3>

            <p>There are no known risks to participants as they will be doing problem solving questions that they would normally
                be doing for studying purposes regardless of their participation in the study.</p>

            <h3>Benefits</h3>

            <p>The participants may gain a better understanding of the concepts that they practice on through the software, may
                develop an appreciation for educational software, and may develop interest in the research and development
                process.</p>

            <h3>Privacy and confidentiality</h3>

            <p>Questionnaires and computer logs are anonymous. Names of participants will be stored separately from information
                collected.
                Your name will not be associated in any way with the information collected about you or your usage of the
                computer during the study.
                Furthermore, because the interest of this study is to identify average responses and behaviour of the entire
                group of participants, you will not be identified in any way in any written reports of this research.
                Participants have a right to access their own results so long as their names and numeric tags are still
                available.
                The data obtained from both components of the study will be retained for 5 years after publication in secured,
                electronic form, which only researchers associated with this research will have access to.
                No audio or video tapes will be used. General results of the research study may be available through
                publications.
                A summary of the results will be made available to participants upon request.</p>

            <h3>Concerns about participants’ rights</h3>

            <p>If you have any concerns or complaints about your rights as a research participant and/or your experiences while
                participating in this study, contact the Research Participant Complaint Line in the UBC Office of Research
                Ethics toll free at 1-877-822-8598 or the UBC Okanagan Research Services Office at 250-807-8832.
                It is also possible to contact the Research Complaint Line by email (RSIL@ors.ubc.ca ).</p>

            <h3>Participant Certification</h3>

            <p>I have read this consent and authorization form. I have had the opportunity to ask, and I have received answers
                to, any questions I had regarding the study and the use and disclosure of information about me for the study. I
                agree to take part in this study as a research participant.
                By giving my consent, I affirm that I am at least 18 years old and I have a copy of this consent form.</p><br>

            <h5>Do you agree to give consent to participate in this study?</h5>
            {!! Form::open([ 'action' => 'ConsentController@store']) !!}
            <div class="form-group">


                {!! Form::label('data_consent', 'Yes') !!}
                {!! Form::radio('data_consent', 1, ($data_consent)? 1: 0) !!}<br>

                {!! Form::label('data_consent', 'No') !!}
                {!! Form::radio('data_consent', 0, ($data_consent)? 0: 1) !!}

            </div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Consent',
            page: '/consent'
        });
    </script>
@endsection