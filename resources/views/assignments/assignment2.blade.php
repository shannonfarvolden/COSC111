@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 2 [28 pts]</h2>
        <p>Due: Sunday 9:00am on March 04th</p>
        The purpose of this assignment is to give you practice writing simple
        Java programs on your own without step-by-step guidelines. You will
        still have the option to discuss problems with others and search
        online for help, but please remember to cite all your sources and
        follow proper academic conduct.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Calculator.java 
            <li>CreatePassword.java
            <li>RectColTransposition.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Simple Calculator [8 pts]</h3>
        </div>
        <div class="panel-body">
        Write a simple calculator program that takes a binary operator and two
        operands from the user, calculates the math expression, and displays
        the result. The binary operators you will need to handle are: +, -, *,
        /, % (mod), and ^ (power of). Be sure your program handles the cases
        illustrated in the sample output below.
        <p>
        Sample output:
        <pre>
Enter an operator (+, -, *, /, %, ^): 
+
Enter the first operand: 
4
Enter the second operand: 
8
4.0 + 8.0 = 12.0
        </pre>
        <p>

        Sample output:
        <pre>
Enter an operator (+, -, *, /, %, ^): 
/
Enter the first operand: 
4
Enter the second operand: 
7
4.0 / 7.0 = 0.5714285714285714
        </pre>
        <p>

        Sample output:
        <pre>
Enter an operator (+, -, *, /, %, ^): 
%
Enter the first operand: 
10
Enter the second operand: 
3
10.0 % 3.0 = 1.0
        </pre>
        <p>

        Sample output:
        <pre>
Enter an operator (+, -, *, /, %, ^): 
^
Enter the first operand: 
16
Enter the second operand: 
0.5
16.0 ^ 0.5 = 4.0
        </pre>
        <p>

        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
  
        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[2 pts]</b> Reading in the necessary user input
          <li> <b>[3 pts]</b> Calculating the math result 
		  (without using <tt>System.exit</tt>)
          <li> <b>[1 pt]</b> Displaying the math expression calculated and its answer
        </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Random Password Generator [9 pts]</h3>
        </div>
        <div class="panel-body">
        Write a program that generates an 8-digit password randomly with the
        following syntax:
        <ul>
        <li> The first two characters must be small letters (a-z)
        <li> The next two characters must be capital letters (A-Z)
        <li> The next two characters must be one of the following special
        characters: ! " # $ % &
        <li> The last two characters must be a numeric digit (0-9)
        </ul>

        Sample output:
        <pre>
Your randomly generated password is: kuZY#&26
        </pre>
        <p>

        Sample output:
        <pre>
Your randomly generated password is: npHB"%90
        </pre>
        <p>

        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.

        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[1 pt]</b> The randomly generated password has 8 digits
          <li> <b>[1 pt]</b> Each group of characters follow the required syntax 
          <li> <b>[4 pts]</b> Four groups of random characters are generated 
          <li> <b>[1 pt]</b> Displays the generated password to the user 
        </ul>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Encryption with Digital Keys [11 pts]</h3>
        </div>
        <div class="panel-body">
        Rectangular columnar transposition is an encryption method that uses a
        digitally generated key. In this exercise, we will have a digital key
        with 3 digits. For example, using digits 1, 2, and 3, a randomly
        generated key may be 123, 132, 213, 231, 312, or 321.
        <p>
        Next, the user enters a plain message to be encrypted. Internally, the
        program organizes each letter in the message beneath each digit on
        separate rows. For example, given the key 312 and the message "sell
        all stocks now", the program will first remove all whitespaces in the
        message, capitalizes the message, and organizes the message as follows:
        <pre>
3 1 2
S E L
L A L
L S T
O C K
S N O
W
        </pre>

        <p>
        Finally, the program will take all the letters in the column in the
        order of the numeric digit, and displays it as the encrypted message.
        Using the above example, the encrypted message would be: 
        <tt>EASCNLLTKOSLLOSW</tt>
        <p>

        Sample output:
        <pre>
generated key: 213
Enter a secret message you wish to encode: 
sell all stocks now
Encrypted message: EASCNSLLOSWLLTKO
        </pre>

        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
        <p>

		Also, in order to get full marks, you cannot use <tt>System.exit</tt>
		in your loop or conditional statements.

        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[2 pts]</b> Generates a random 3-digit key with numbers
          1,2,3 (each number can only appear once in a key)
          <li> <b>[1 pt]</b> Read from the user a plain message to encode 
          <li> <b>[1 pt]</b> Remove whitespaces from the message 
          <li> <b>[1 pt]</b> Convert the message to all capital letters
          <li> <b>[3 pts]</b> Rearrange the message in rectangular column format
          <li> <b>[1 pt]</b> Display encrypted message 
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
