@extends('app')

@section('content')
<div class="jumbotron">
    <h2>Assignment 2 [25 pts + 8 bonus pts]</h2>
    <p>Due: Saturday 9:00am on March 05th</p>
    The purpose of this assignment is to give you practice writing simple Java
    programs on your own without step-by-step guidelines. You will still have
    the option to discuss problems with others and search online for help, but
    please remember to cite all your sources and follow proper academic
    conduct.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
        <li><tt>MetricConversion.java</tt>
        <li><tt>PhoneKeypad.java</tt>
        <li><tt>Locker.java</tt>
        <li><tt>LeftArrowHead.java</tt> (for bonus marks)
    </ul>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">1. Conversion between Feet and Meters [7 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            Programming Exercise 6.9 (page 236).

        <p>
            Be sure to write comments above your class to indicate the
            author of this file (you), acknowledgements for any external help you
            got, and what the purpose of this program is.

        <p>
            <b>Grading Scheme</b>:
        <ul>
            <li> <b>[1 pts]</b> Comments
            <li> <b>[1 pt]</b> Table formatting
            <li> <b>[1 pt]</b> Loop through the values for each row of the table
            <li> <b>[1 pt]</b> Calling <tt>footToMeter</tt>
            <li> <b>[1 pt]</b> Calling <tt>meterToFoot</tt>
            <li> <b>[1 pt]</b> Defining <tt>footToMeter</tt>
            <li> <b>[1 pt]</b> Defining <tt>meterToFoot</tt>
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">2. Phone Keypads [9 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            Programming Exercise 6.21 (page 239).

        <p>
            Be sure to write comments above your class to indicate the
            author of this file (you), acknowledgements for any external help you
            got, and what the purpose of this program is.

        <p>
            <b>Grading Scheme</b>:
        <ul>
            <li> <b>[2 pts]</b> Comments
            <li> <b>[2 pts]</b> User input for phone number
            <li> <b>[1 pt]</b> Converts only characters (not digits)
            <li> <b>[1 pt]</b> Looping through all the characters of the user
                input
            <li> <b>[1 pt]</b> Calling <tt>getNumber</tt>
            <li> <b>[2 pts]</b> Defining <tt>getNumber</tt>
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">3. Locker Puzzle [9 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            Write a program to find the answer to the following locker problem.
            A school has 100 lockers and 100 students. All lockers are closed on the
            first day of school. As the students enter, the first student, denoted
            S1, opens every locker. Then the second student, S2, begins with the
            second locker, denoted L2, and closes every other locker. Student S3
            begins with the third locker and changes every third locker (closes it
            if it was open, and opens it if it was closed). Student S4 begins with
            locker L4 and changes every fourth locker. Student S5 starts with L5 and
            changes every fifth locker, and so on, until student S100 changes L100.

        <p>
            After all the students have passed through the building and changed the
            lockers, which lockers are open?

        <p>
            Specific requirements:
        <ul>
            <li> Use an array of 100 booleans to represent the status of a locker
                (i.e., the value is <tt>true</tt> if the locker is opened and
                <tt>false</tt> if the locker is closed
            <li> Create a constant to represent the number 100 and use it in the
                program as needed
            <li> Use a loop to loop through all 100 students
            <li> For each student, use a loop to loop through the lockers
            <li> Display the lockers that are open at the end of the program
        </ul>

        <p>
            Sample output:
      <pre>
Locker 1 is open
Locker 4 is open
Locker 9 is open
Locker 16 is open
Locker 25 is open
Locker 36 is open
Locker 49 is open
Locker 64 is open
Locker 81 is open
Locker 100 is open
      </pre>

        <p>
            Lastly, be sure to write comments above your class to indicate the
            author of this file (you), acknowledgements for any external help you
            got, and what the purpose of this program is.

        <p>
            <b>Grading Scheme</b>:
        <ul>
            <li> <b>[2 pts]</b> Comments
            <li> <b>[1 pt]</b> Defining and using a constant
            <li> <b>[1 pt]</b> Declaring an array of booleans
            <li> <b>[1 pt]</b> Looping through all the students
            <li> <b>[1 pt]</b> Looping through all the lockers
            <li> <b>[1 pt]</b> Changing the locker to the opposite value
            <li> <b>[2 pts]</b> Displaying only lockers that are open
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">4. Left Arrowhead Pattern [Bonus: 8 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            Draw a pattern of stars that resemble an arrowhead pointing left (see sample output).

        <p>
            Hint: Focus on the top half of the arrowhead first. Draw the number of
            leading spaces first, then draw the stars on that line. Then focus on
            the bottom half of the arrowhead and repeat.

        <p>
            Sample output:
      <pre>
Enter an odd number for the height:
8
Enter an odd number for the height:
10
Enter an odd number for the height:
9
     *
    **
   ***
  ****
 *****
  ****
   ***
    **
     *
      </pre>
        <p>
            Sample output:
      <pre>
Enter an odd number for the height:
5
   *
  **
 ***
  **
   *
      </pre>

        <p>
            Be sure to write comments above your class to indicate the
            author of this file (you), acknowledgements for any external help you
            got, and what the purpose of this program is.

        <p>
            <b>Grading Scheme</b>:
        <ul>
            <li> <b>[2 pts]</b> Comments
            <li> <b>[1 pt]</b> Taking user input for the height of the arrowhead
            <li> <b>[1 pt]</b> Input validation for odd number
            <li> <b>[2 pts]</b> Printing top half of the arrowhead
            <li> <b>[2 pts]</b> Printing bottom half of the arrowhead
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