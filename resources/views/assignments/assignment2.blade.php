@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 2 [27 pts]</h2>
        <p>Due: Sunday 9:00am on March 05th</p>
		The purpose of this assignment is to give you practice writing simple
		Java programs on your own without step-by-step guidelines. You will
		still have the option to discuss problems with others and search
		online for help, but please remember to cite all your sources and
		follow proper academic conduct.
        <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>TemperatureConversion.java</tt>
      <li><tt>Craps.java</tt>
      <li><tt>Locker.java</tt>
    </ul>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Conversion between Celsius and Fahrenheit [8 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      Programming Exercise 6.8 (page 235). Call your class
	  <tt>TemperatureConversion</tt>.
	  
	  <p>
	  Note that your output will be in plain text only (i.e., you will not
	  have to bold the table titles and the lines can be made up of a series
	  of dashes "------").
      
      <p>
      Be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.

      <p>
      <b>Grading Scheme</b>:
      <ul>
        <li> <b>[2 pts]</b> Comments
        <li> <b>[1 pt]</b> Table formatting
        <li> <b>[1 pt]</b> Loop through the values for each row of the table
        <li> <b>[1 pt]</b> Calling <tt>celsiusToFahrenheit</tt>
        <li> <b>[1 pt]</b> Calling <tt>fahrenheitToCelsius</tt>
        <li> <b>[1 pt]</b> Defining <tt>celsiusToFahrenheit</tt>
        <li> <b>[1 pt]</b> Defining <tt>fahrenheitToCelsius</tt>
      </ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Craps [10 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      Programming Exercise 6.30 (page 241).
	  Call your class <tt>Craps</tt>.
	  Note that another sample output involving more rolls is this:
	  <pre>
You rolled 4 + 2 = 6
point is 6
You rolled 4 + 4 = 8
point is 8
You rolled 5 + 3 = 8
You win
      </pre>

      <p>
      Be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.

      <p>
      <b>Grading Scheme</b>:
      <ul>
        <li> <b>[2 pts]</b> Comments
        <li> <b>[1 pt]</b> Using random to mimic dice rolling
        <li> <b>[2 pts]</b> Determining outcome when sum is 2, 3, 12, 7, or 11
        <li> <b>[1 pt]</b> Keep rolling until sum is 7 
        <li> <b>[2 pts]</b> Keep rolling until sum is previous point
        <li> <b>[2 pts]</b> Printing proper statements 
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
