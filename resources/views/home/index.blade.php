@extends('app')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to COSC 111</h1>
        <p>Introduction to Computer Programming I</p>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Administration</h3>
        </div>
        <div class="panel-body">
            Download the course <a href='/documents/111outline2017WT2.pdf'>syllabus</a>.
            <p>
            <p>
                Evaluation Criteria: Total {{$total}}%
            <ul>
                @foreach($evaluations as $evaluation)
                    <li>{{$evaluation->grade}}% {{$evaluation->category}}</li>
                @endforeach
            </ul>
            @if(Auth::check() && Auth::user()->admin)
                <a href="{{action('EvaluationsController@index')}}"
                   class="btn btn-default">Manage</a>
            @endif
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Tentative Schedule</h3>
        </div>

        <table class="table">
            <tr>
                <th>Week</th>
                <th>Topics</th>
                <th>Readings</th>
                <th>Assignments and Tests</th>
                <th>Labs</th>
            </tr>
            <tr>
                <!--week (date)-->
                <td>1 (Jan 03)</td>
                <!--topics-->
                <td>Introduction
                </td>
                <!--readings-->
                <td>Ch 1</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td>No labs</td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>2 (Jan 10)</td>
                <!--topics-->
                <td>Basic Programming</td>
                <!--readings-->
                <td>Ch 2</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab1">Lab 1</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>3 (Jan 17)</td>
                <!--topics-->
                <td>Conditionals</td>
                <!--readings-->
                <td>Ch 3</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab2">Lab 2</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>4 (Jan 24)</td>
                <!--topics-->
                <td>Math Functions, Chars, Strings</td>
                <!--readings-->
                <td>Ch 4</td>
                <!--assignments/tests-->
                <td><a href="/assignment1">A1</a> (due Jan 29)</td>
                <!--labs-->
                <td><a href="/lab3">Lab 3</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>5 (Jan 31)</td>
                <!--topics-->
                <td>Loops</td>
                <!--readings-->
                <td>Ch 5</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab4">Lab 4</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>6 (Feb 07)</td>
                <!--topics-->
                <td>Two-Stage Exam</td>
                <!--readings-->
                <td>N/A</td>
                <!--assignments/tests-->
                <td><font color=red>Midterm 1</font>
                    (<a href="/documents/cheatsheet.pdf">cheatsheet</a> provided)<br>
                    <a href="/documents/old-mt1.pdf">Practice Midterm</a> 
                </td>
                <!--labs-->
                <td><a href="/lab5">Lab 5</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>7 (Feb 14)</td>
                <td colspan=3 align=center>Reading Week: No class</td>
                <!--labs-->
                <td>No labs</td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>8 (Feb 21)</td>
                <!--topics-->
                <td>Methods</td>
                <!--readings-->
                <td>Ch 6</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab5">Lab 5 Continued</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>9 (Feb 28)</td>
                <!--topics-->
                <td>Arrays</td>
                <!--readings-->
                <td>Ch 7</td>
                <!--assignments/tests-->
                <td><a href="/assignment2">A2</a> (due Mar 05)</td>
                <!--labs-->
                <td><a href="/lab6">Lab 6</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>10 (Mar 07)</td>
                <!--topics-->
                <td>Multidimensional Arrays</td>
                <!--readings-->
                <td>Ch 8</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab7">Lab 7</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>11 (Mar 14)</td>
                <!--topics-->
                <td>Two-Stage Exam</td>
                <!--readings-->
                <td>N/A</td>
                <!--assignments/tests-->
                <td><font color=red>Midterm 2</font>
                    (<a href="/documents/111cheatsheet.pdf">cheatsheet</a> provided)<br>
                    <a href="/documents/old-mt2.pdf">Practice Midterm</a> 
                </td>
                <!--labs-->
                <td><a href="/lab8">Lab 8</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>12 (Mar 21)</td>
                <!--topics-->
                <td>Objects and Classes</td>
                <!--readings-->
                <td>Ch 9</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab9">Lab 9</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>13 (Mar 28)</td>
                <!--topics-->
                <td>Object-Oriented Thinking</td>
                <!--readings-->
                <td>Ch 10</td>
                <!--assignments/tests-->
                <td><a href="/assignment3">A3</a> (due Apr 02)</td>
                <!--labs-->
                <td>Lab used as TA office hours (No lab on Friday)</td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>14 (Apr 04)</td>
                <!--topics-->
                <td>Object-Oriented Thinking</td>
                <!--readings-->
                <td>Ch 10</td>
                <!--assignments/tests-->
                <td>
                <a href="/documents/old-final.pdf">Practice Final</a> 
                </td>
                <!--labs-->
                <td>No labs</td>
            </tr>
        </table>
    </div>
    </div>
@endsection

@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Home',
            page: '/'
        });
    </script>
@endsection
