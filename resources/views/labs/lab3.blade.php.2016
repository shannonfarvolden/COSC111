@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 3 [20 pts]</h2>
        <p>Practicing Conditionals</p>
        The purpose of this lab is to give you hands on practice with boolean
        expressions and conditional statements.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 3 (nothing to submit)
            <li>Typed answers for the boolean expressions exercise
            <li><tt>FindNumDays.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
            At the beginning of the lab, show your TA for completing at least one
            attempt for Quiz 3.
            <p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Boolean expressions [10 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                This exercise helps you get comfortable with evaluating boolean
                expressions. For each of the following questions, indicate if the final
                result is true or false. You should ideally do this by hand (with pen
                and paper) because these types of questions will be similar to those
                that appear on handwritten exams. However, for this lab, you can also
                type the expression into Eclipse to help you verify your own answers.
                Make sure you understand why the expressions evaluate to that particular
                outcome.

            <p>
                <b>[1 pt each]</b>
                Indicate the resulting value of each of the following:

            <ol>
                <li><tt>!true</tt>
                <li><tt>!!true</tt>
                <li><tt>true || true && false</tt>
                <li><tt>3 * 3 - 3 > 2 && 4 - 2 > 5 </tt>
                <li><tt>3 * 3 - 3 > 2 || 4 - 2 > 5 </tt>
                <li><tt>x > 0 || (x < 10 && y < 0) </tt>, assume x = -1 and y = 3
                <li><tt>!(x > 0) ^ (y == 3) </tt>, assume x = -1 and y = 3
                <li><tt>(x + y > 10) && (y < 5) </tt>, assume x = -1 and y = 3
                <li><tt>!y > 3 </tt>, assume y = 3
                <li><tt>(x + y < 10) || !(y < 5) </tt>, assume x = -1 and y = 3
            </ol>

            Note: one of the expressions above generates a syntax error and cannot
            be evaluated. You must identify that expression and explain why an error
            occurred to get full marks.


        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Find Number of Days [9 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gives you practice using comparison operators and nested
                if-statements.
                First, create a program called <tt>FindNumDays</tt>.

            <p>
                <b>[1 pt]</b>
                Prompt the user to enter the month (as an integer from 1 to 12) and year
                (as an integer with 4 digits).

            <p>
                <b>[1 pt]</b>
                Be sure to check that the month and year entered are within the valid ranges.

            <p>
                <b>[1 pt]</b>
                If the entered month and year are valid, the program may continue.
                Otherwise, print out an error message to the user and the program will
                end.

            <p>
                <b>[1 pt]</b>
                Check if the year entered by the user is a leap year. Keep track of this
                result in a boolean variable. (Recall the definition of a leap year
                reviewed in the slides and also in the textbook.)

            <p>
                <b>[1 pt]</b>
                A month has 30 days in April, June, September, and November, and 31 days
                in all the other months aside from February. In February, a month has 29
                days in a leap year, and only 28 days otherwise. Write the neceesary
                if-statements to determine the number of days there are in the month
                entered by the user.

            <p>
                <b>[1 pt]</b>
                Display the number of days back to the user.

            <p>
                <b>[1 pt]</b>
                Note that when you display the information, the n'th month will need to
                be printed based on month, so that you use "1st" for January, "2nd" for
                February, "3rd" for March, and "nth" for the other months. See sample
                output below for clarification.

            <p>
                Sample output:
            <pre>
Enter a month (e.g., 1 for January):
0
Enter a year (e.g., 2012):
1234
Invalid input - please restart the program
      </pre>
            <p>
                Sample output:
            <pre>
Enter a month (e.g., 1 for January):
3
Enter a year (e.g., 2012):
123
Invalid input - please restart the program
      </pre>
            <p>
                Sample output:
            <pre>
Enter a month (e.g., 1 for January):
6
Enter a year (e.g., 2012):
2014
There are 30 days for the 6th month of year 2014
      </pre>
            <p>
                Sample output:
            <pre>
Enter a month (e.g., 1 for January):
2
Enter a year (e.g., 2012):
2012
There are 29 days for the 2nd month of year 2012
      </pre>
            <p>
                Sample output:
            <pre>
Enter a month (e.g., 1 for January):
2
Enter a year (e.g., 2012):
2013
There are 28 days for the 2nd month of year 2013
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Labs',
            page: '/labs'
        });
    </script>
@endsection
