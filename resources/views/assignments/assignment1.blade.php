@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 1 [23 pts]</h2>
        The purpose of this assignment is to give you practice writing simple Java
        programs on your own without step-by-step guidelines. You will still have
        the option to discuss problems with others and search online for help, but
        please remember to cite all your sources and follow proper academic
        conduct.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li><tt>ClassGrade.java</tt>
            <li><tt>ClassGrade-output.txt</tt> showing your program works
            <li><tt>Palindrome.java</tt>
            <li><tt>Palindrome-output.txt</tt> showing your program works
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Calculating Course Grade [12 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                Write a program that lets the user enter scores for various course
                components and calculates the course grade obtained so far (without the
                final exam mark). The program will then assume the user will get the
                same grade for the final exam, and use that to project an overall
                grade for the course.

            <p>
                Specific requirements:
            <ul>
                <li> There are several course components to consider: in-class
                    activities, assignments, labs, midterm 1, midterm 2, and final exam.
                <li> Each course component has a weight towards the final course grade.
                    These weights are identical to the ones used in this course COSC 111. In
                    the order they are listed above, the weights are: 10%, 15%, 15%, 10%,
                    20%, and 30% respectively.
                <li> You can assume the user will enter a percentage for a course
                    component (i.e., for assignments, the user enters one single overall
                    assignment percentage, not individual assignment marks).
                <li> If the student does better on midterm 2 than midterm 1, then the
                    mark used for midterm 1 will be that of midterm 2.
            </ul>

            <p>
                Sample output:
      <pre>
Enter your in-class activities score (in percentage):
97.5
Enter your assignment score (in percentage):
88.3
Enter your labs score (in percentage):
100
Enter your midterm 1 score (in percentage):
57.333
Enter your midterm 2 score (in percentage):
78.5
Your grade so far is 61.55 out of 70.
If you do just as well on the final, your overall grade could be 87.92.
      </pre>

            <p>
                Lastly, be sure to write comments above your class to indicate the
                author of this file (you), acknowledgements for any external help you
                got, and what the purpose of this program is.

            <p>
                <b>Grading Scheme</b>:
            <ul>
                <li> <b>[2 pts]</b> Comments
                <li> <b>[2 pts]</b> Use of constants
                <li> <b>[1 pt]</b> Taking user input
                <li> <b>[2 pts]</b> Input data validation
                    (percentages must be between 0 and 100)
                <li> <b>[1 pt]</b> Replacing MT1 mark if applicable
                <li> <b>[1 pt]</b> Calculating weighted course grade so far
                <li> <b>[1 pt]</b> Calculating projected course grade overall
                <li> <b>[1 pt]</b> Displaying results
                <li> <b>[1 pt]</b> Naming convention
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Checking for Palindromes [11 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                Write a program that lets the user enter a 3 digit integer and determine
                whether that number is a palindrome or not. A palindrome is a sequence
                of characters that is read the same forwards or backwards (e.g., 1221
                and 121).

            <p>
                Specific requirements:
            <ul>
                <li> Use arithmetic operators to extract the digits needed for
                    comparison (Hint: use the remainder operator)
            </ul>

            <p>
                Sample output:
      <pre>
Enter a three-digit integer: 1221
Your number should be 3 digits
      </pre>

            <p>
                Sample output:
      <pre>
Enter a three-digit integer: 121
121 is a palindrome
      </pre>

            <p>
                Sample output:
      <pre>
Enter a three-digit integer: 123
123 is not a palindrome
      </pre>

            <p>
                Lastly, be sure to write comments above your class to indicate the
                author of this file (you), acknowledgements for any external help you
                got, and what the purpose of this program is.

            <p>
                <b>Grading Scheme</b>:
            <ul>
                <li> <b>[2 pts]</b> Comments
                <li> <b>[1 pt]</b> Taking user input
                <li> <b>[2 pts]</b> Input data validation
                    (integers must be 3 digits long)
                <li> <b>[1 pt]</b> Extracting the first digit
                <li> <b>[1 pt]</b> Extracting the third digit
                <li> <b>[1 pt]</b> Comparison of first and third digits
                <li> <b>[1 pt]</b> Correct use of if-else statement
                <li> <b>[1 pt]</b> Displaying results
                <li> <b>[1 pt]</b> Naming convention
            </ul>
        </div>
    </div>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Assignments',
            page: '/assignments'
        });
    </script>
@endsection