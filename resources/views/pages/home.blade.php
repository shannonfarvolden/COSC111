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
            Download the course <a href='/documents/111outline2015WT2.pdf'>syllabus</a>.
            <p>
            <p>
                Evaluation Criteria: Total 100%
            <ul>
                <li> 10% In-class activities</li>
                <li> 15% Assignments</li>
                <li> 15% Labs</li>
                <li> 10% Midterm 1</li>
                <li> 20% Midterm 2 (cumulative)</li>
                <li> 30% Final Exam (cumulative)</li>
            </ul>
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
                <td>1 (Jan 04)</td>
                <!--topics-->
                <td>Introduction Material</td>
                <!--readings-->
                <td>Ch 1</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab1">Lab 1</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>2 (Jan 11)</td>
                <!--topics-->
                <td>Basic Programming</td>
                <!--readings-->
                <td>Ch 2</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td><a href="/lab2">Lab 2</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>3 (Jan 18)</td>
                <!--topics-->
                <td>Conditionals</td>
                <!--readings-->
                <td>Ch 3</td>
                <!--assignments/tests-->
                <td><a href="/assignment1">A1</a> due</td>
                <!--labs-->
                <td><a href="/lab3">Lab 3</a></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>4 (Jan 25)</td>
                <!--topics-->
                <td>Math Functions, Chars, Strings</td>
                <!--readings-->
                <td>Ch 4</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>5 (Feb 01)</td>
                <!--topics-->
                <td>Loops</td>
                <!--readings-->
                <td>Ch 5</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>6 (Feb 08)</td>
                <td colspan=3 align=center>Family Day: No class</td>
                <!--labs-->
                <td>No lab</td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>7 (Feb 15)</td>
                <!--topics-->
                <td>Q&A</td>
                <!--readings-->
                <td>N/A</td>
                <!--assignments/tests-->
                <td>Midterm 1</td>
                <!--labs-->
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>8 (Feb 22)</td>
                <!--topics-->
                <td>Methods</td>
                <!--readings-->
                <td>Ch 6</td>
                <!--assignments/tests-->
                <td></td>
                <!--labs-->
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>9 (Feb 29)</td>
                <!--topics-->
                <td>Arrays</td>
                <!--readings-->
                <td>Ch 7</td>
                <!--assignments/tests-->
                <td>A2 due</td>
                <!--labs-->
                <td></td>
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
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>11 (Mar 14)</td>
                <!--topics-->
                <td>Q&A</td>
                <!--readings-->
                <td>N/A</td>
                <!--assignments/tests-->
                <td>Midterm 2</td>
                <!--labs-->
                <td></td>
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
                <td>No lab</td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>13 (Mar 28)</td>
                <td colspan=3 align=center>Easter Monday: No class
                {{--labs--}}
                <td></td>
            </tr>
            <tr>
                <!--week (date)-->
                <td>14 (Apr 04)</td>
                <!--topics-->
                <td>Object-Oriented Thinking</td>
                <!--readings-->
                <td>Ch 10</td>
                <!--assignments/tests-->
                <td>A3 due</td>
                <!--labs-->
                <td>No lab</td>
            </tr>
        </table>
    </div>

@endsection

@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send',{
            hitType: 'pageview',
            title: 'Home',
            page: '/'
        });
    </script>
@endsection