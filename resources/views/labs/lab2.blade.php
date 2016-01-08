@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Lab 2 [24 pts]</h2>
    <p>Diving into Programming</p>
    The purpose of this lab is to give you hands on practice with writing
    small Java programs and getting used to the Eclipse environment.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>CalculateBMI.java</tt>
      <li><tt>CalculateInvestment.java</tt>
      <li>Written/typed answers for the guessing game
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Calculating BMI [10 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise helps you practice using variables, arithmetic
      expressions, and Scanner objects. 
      First, create a program called <tt>CalculateBMI</tt>. 
      
      <p>
      <b>[1 pt]</b>
      Be sure to always save your file with the same name as your class. In
      this case, your file will be called <tt>CalulateBMI.java</tt>.
      For now, just have a simple statement that displays "Your BMI is ". We
      will handle the calculations in the next few steps.
      Run it and make sure it works as expected before going on.

      <p>
      Sample output (so far):
      <pre>
Your BMI is 
      </pre>
      <p>
      <b>[1 pt for prompting the user for input, 1 pt for storing inputs]</b>
      Body mass index (BMI) is a measure of a person's health based on their
      weight (in kilograms) and height (in meters). However, our Canadian
      medical system typically measures weight and height using different
      metrics. In your program, prompt the user to enter a weight in pounds
      and height in inches.

      <p>
      <b>[1 pt]</b> Be sure to only create one <tt>Scanner</tt> object, even
      though you need to read in two different values from the user.

      <p>
      <b>[1 pt]</b> Convert the weight you got from pounds to kilograms. Note
      that one pound is 0.45359237 kilograms. Store this into a separate
      variable for decimal numbers and use a meaningful name.

      <p>
      <b>[1 pt]</b> Convert the height you got from inches to meters. Note
      that one inch is 0.0254 meters. Store this into a separate
      variable for decimal numbers and use a meaningful name.

      <p>
      <b>[1 pt]</b> Do the BMI calculation by taking the weight in kilograms
      and dividing it by the square of the height in meters. Store this into a
      separate variable for decimal numbers and use a meaningful name.

      <p>
      <b>[1 pt]</b> Go back and modify the original <tt>println</tt> statement
      you wrote at the beginning and now have it display the BMI that you
      calculated.

      <p>
      Sample output:
      <pre>
Enter your weight (in pounds): 
125
Enter your height (in inches): 
63
Your BMI is 22.142528963188443
      </pre>
      <p>
      Note: The recommended BMI value for good health is between 18.5-25.

      <p>
      <b>[1 pt]</b> Lastly, be sure to write comments above your class to
      indicate the author of this file (you), acknowledgements for any
      external help you got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Calculating Investment Values [10 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise helps you practice using variables, arithmetic
      expressions, and Scanner objects. 
      First, create a program called <tt>CalculateInvestment</tt>. 
      
      <p>
      <b>[1 pt]</b>
      Be sure to always save your file with the same name as your class. 

      <p>
      <b>[1 pt for prompting the user for input, 1 pt for storing inputs]</b>
      This program computes the future investment value based on an initial
      investment amount, annual interest rate, and the number of years of
      investment. For now, prompt the user to enter these values as input.

      <p>
      <b>[1 pt]</b> Be sure to only create one <tt>Scanner</tt> object, even
      though you need to read in multiple values from the user.

      <p>
      <b>[1 pt for formula, 1 pt for Math.pow]</b> Calculate the future
      investment amount based on the following formula:
      <p>
      <img width=400 src=images/lab2/investFormula.png>
      <p>
      Note that you will need to compute the power of a number. To do this,
      use <tt>Math.pow(a,b)</tt> to calculate "a to the power of b".  Similar
      to <tt>System.out.println</tt>, this is another predefined method that
      is available for you to use in your programs. We will see other
      predefined methods that we can use to make more powerful programs in the
      upcoming weeks.

      <p>
      <b>[1 pt]</b> Display the future, accumulated amount that you just
      calculated back to the user.

      <p>
      <b>[1 pt]</b> Check your program calculation with the sample output
      below. Ensure you are converting the input investment rate (which was an
      annual rate) into a monthly rate (which is required by the formula).

      <p>
      Sample output:
      <pre>
      Enter investment amount: 
      1000
      Enter annual interest rate in percentage: 
      3.25
      Enter number of years: 
      1
      Accumulated value is 1032.9885118105894
      </pre>
      <p>
      Sample output:
      <pre>
      Enter investment amount: 
      1000.56
      Enter annual interest rate in percentage: 
      4.25
      Enter number of years: 
      1.5
      Accumulated value is 1066.302672612657
      </pre>
      <p>

      <p>
      <b>[1 pt]</b> Lastly, be sure to write comments above your class to
      indicate the author of this file (you), acknowledgements for any
      external help you got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">3. The Guessing Game [4 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      The following program asks you (the computer user) to pick a number
      within a certain range and then the program displays some response back.
      The program code is below.  Load this program into Eclipse and run it.
      You can type it in line by line as written below, or you can download it
      from this file <a
        href=documents/OddNum.java><tt>OddNum.java</tt></a>.
      Try running it a few times to see what it does.
      <pre>
1  import java.util.Scanner;.
2  
3  public class OddNum
4  {
5    public static void main( String[] args )
6    {
7      Scanner input = new Scanner( System.in );
8      int yourNum;
9      System.out.println( "Enter an integer number between 1 and 100: " );
10     yourNum = input.nextInt();
11     System.out.println( "You entered " + yourNum );
12 
13     if(( yourNum < 1 )||( yourNum > 100 ))
14     {
15       System.out.println( "Hey, you didn't enter a number in the valid range!" );
16     }
17     else.
18     {
19       if( yourNum % 2 == 1 )
20         System.out.println( "Your number is odd!  Haha, that's a pun." );
21       else
22         System.out.println( "Your number is even!" );
23       System.out.println( "Thank you for being a cooperative user." );
24     }
25   }
26 }
      </pre>
      <p>
      In this exercise, what we want you to do is to look closely at each line
      in <tt>OddNum.java</tt> and try to see if you can guess what it's doing.
      Don't worry if you can't understand everything exactly, just take a
      guess.  The purpose of this activity is to get you comfortable with new
      Java code that you will be seeing in the next few weeks.
      <p>
      <b>[1 pt each]</b>
      In particular, answer the following questions by indicating the line
      number(s) in the program:
      <ol>
        <li>Which line of code reads in and stores an integer input from the
        user? 

        <li>Which line of code checks if the number the user input is within
        the specified range of 1 and 100?

        <li>Which line of code checks whether the number the user entered is
        an odd number by using the remainder operator?

        <li>Which lines of code describe the block of code that decides what
        the program should do once it has determined that the user has entered
        a valid number?
      </ol>
      <b>Be careful</b> with the line numbers. Use the ones shown above (in
      case your version in Eclipse has different spacing and line numbers.
    </div>
  </div>

@endsection