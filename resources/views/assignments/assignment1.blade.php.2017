@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Assignment 1 [26 pts]</h2>
    <p>Due: Sunday 9:00am on Jan 28th</p>
    The purpose of this assignment is to give you practice writing simple Java
    programs on your own without step-by-step guidelines. You will still have
    the option to discuss problems with TAs/others and search online for help,
    but <b>please remember to cite all your sources and follow proper academic
    conduct</b>.
    <p></p>
    <b>What to Submit:</b>
    <ul>
      <li>ClassGrade.java 
      <li>ClassGrade-output.txt showing the test results of your program
      <li>BinaryToDecimal.java
      <li>BinaryToDecimal-output.txt showing the test results of your program
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Activity [13 pts]</h3>
    </div>
    <div class="panel-body">
      Write a program that lets the user enter scores for various course
      components and calculates the course grade obtained so far (without the
      final exam mark). The program will then assume the user will get the
      same grade for the final exam, and use that to project an overall grade
      for the course.
      <p>

      Specific requirements:

      <ul>
      <li> There are several course components to consider: in-class
      activities, online quizzes, labs, assignments, midterm 1, midterm 2, and
      final exam.
      <li> Each course component has a weight towards the final course grade.
      These weights are identical to the ones used in this course COSC 111. In
      the order they are listed above, the weights are: 10%, 5%, 10%, 15%,
      10%, 20%, and 30% respectively.

      <li> You can assume the user will enter a percentage for a course
      component (i.e., for assignments, the user enters one single overall
      assignment percentage, not individual assignment marks from A1, A2, and
      A3).

      <li> If the student does better on midterm 2 than on midterm 1, then the
      mark used for midterm 1 will be replaced by the midterm 2 mark.
      </ul>
      <p>
      Sample output:
      <pre>
Enter your in-class activities score (in percentage): 
97.5
Enter your quizzes score (in percentage): 
90
Enter your labs score (in percentage): 
100
Enter your assignment score (in percentage): 
88.3
Enter your midterm 1 score (in percentage): 
57.333
Enter your midterm 2 score (in percentage): 
78.5
Your grade so far is 61.05 out of 70.
If you do just as well on the final, your overall grade could be 87.21.
      </pre>
      <p>

      Lastly, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.
      <p>
      <b>Grading Scheme:</b>
      <ul>
      <li> <b>[2 pts]</b> Comments to explain program logic
      <li> <b>[2 pts]</b> Use of constants  
      <li> <b>[1 pt]</b> Taking user input 
      <li> <b>[2 pts]</b> Input data validation (percentages must be between 0 and 100)
      <li> <b>[1 pt]</b> Replacing MT1 mark if applicable
      <li> <b>[1 pt]</b> Calculating weighted course grade so far 
      <li> <b>[1 pt]</b> Calculating projected course grade overall
      <li> <b>[1 pt]</b> Displaying results 
      <li> <b>[2 pts]</b> Output file with test cases to show your program
      works as expected
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Converting Binary to Decimal [13 pts]</h3>
    </div>
    <div class="panel-body">
      Write a program that lets the user enter a 3-digit binary number and
      convert it to its equivalent decimal representation if the input is
      valid.
      <p>
      Specific requirements:
      <ul>
      <li> If the user enters a negative number, generate an error message and
      end the program.
      <li> If the user enters a number with more than 3 digits, generate an
      error message and end the program.
      <li> If the user enters a 3-digit number but it has numbers that are not
      0's or 1's, then generate an error message and end the program.

      <li> When a valid 3-digit binary number is entered, display the
      corresponding decimal number.

      <li> You <b>cannot</b> use String, char, or Character in this program;
      all work must be done as numbers and using numerical operators only. If
      String, char, or Character are used, you will get 0 for this question
      even if the output is correct.
      </ul>
      <p>

      Sample output:
      <pre>
Enter a 3-digit number in binary: 
-1
We need a 3-digit binary number that only consists of 0's and 1's
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
123
We need a 3-digit binary number that only consists of 0's and 1's
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
112
We need a 3-digit binary number that only consists of 0's and 1's
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
012
The last (rightmost) digit is not 0 or 1...  terminating program
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
021
The middle digit is not 0 or 1...  terminating program
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
000
The binary number you entered: 0
Its equivalent decimal number is: 0
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
001
The binary number you entered: 1
Its equivalent decimal number is: 1
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
010
The binary number you entered: 10
Its equivalent decimal number is: 2
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
110
The binary number you entered: 110
Its equivalent decimal number is: 6
      </pre>
      <p>

      Hint: You may wish to ensure your program extracts each digit properly
      before doing any calculation. To extract a digit, use % and / in
      combination.
      <p>

      Lastly, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.
      <p>
      <b>Grading Scheme:</b>
      <ul>
      <li> <b>[2 pts]</b> Comments to explain program logic
      <li> <b>[1 pt]</b> Taking user input 
      <li> <b>[2 pts]</b> Rejecting input < 0 or > 111
      <li> <b>[3 pts]</b> Extracting each digit and rejecting input if digit
      is not binary
      <li> <b>[2 pts]</b> Calculating the decimal number correctly 
      <li> <b>[1 pt]</b> Displaying the converted decimal number
      <li> <b>[2 pts]</b> Output file with test cases to show your program
      works as expected
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
