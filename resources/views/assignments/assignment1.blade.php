@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Assignment 1 [xx pts]</h2>
    <p>Due: Sunday 9:00am on Jan 28th</p>
    The purpose of this assignment is to give you practice writing simple Java
    programs on your own without step-by-step guidelines. You will still have
    the option to discuss problems with others and search online for help, but
    <b>please remember to cite all your sources and follow proper academic
    conduct</b>.
    <p></p>
    <b>What to Submit:</b>
    <ul>
      <li>Items to submit xx
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Activity [xx pts]</h3>
    </div>
    <div class="panel-body">
      Description
      <p>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Converting Binary to Decimal [11 pts]</h3>
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
011
The binary number you entered: 11
Its equivalent decimal number is: 3
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
100
The binary number you entered: 100
Its equivalent decimal number is: 4
      </pre>
      <p>
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
101
The binary number you entered: 101
Its equivalent decimal number is: 5
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
      Sample output:
      <pre>
Enter a 3-digit number in binary: 
111
The binary number you entered: 111
Its equivalent decimal number is: 7
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
