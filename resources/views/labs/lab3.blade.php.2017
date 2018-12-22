@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 3 [18 pts]</h2>
        <p>Practicing Conditionals</p>
        The purpose of this lab is to give you hands on practice designing and
        organizing conditional statements. If you need clarification with any
        of the steps below, ask your TA and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 3 (nothing to submit)
            <li>GuessIf.java (with the final solution)
            <li>pennies.txt 
            <li>WhoIsOlder.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
        At the beginning of the lab, show your TA for completing at least one
        attempt for Quiz 3.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Structuring If-Statements [7 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b>
        This exercise lets you think about how different kinds of
        if-statements work. 
        First, create a program called <tt>GuessIf</tt>. The code for this
        program is given below. Copy it line by line into your program.
        Compile and run the program to make sure it works properly. 
        <p>

        <pre>
import java.util.Random;

public class GuessIf
{
  public static void main( String[] args )
  {
    // generate random integer in [1,100]
    Random gen = new Random();
    int numPennies = 1 + gen.nextInt( 100 );

    System.out.println( "Guess how many pennies I have in my hands?" );

    // check guess and give feedback
    if( numPennies < 25 )
      System.out.println( "I have less than a quarter" ); 

    if( numPennies < 50 )
      System.out.println( "I have less than half a dollar" ); 

    if( numPennies < 100 ) 
      System.out.println( "I have less than a dollar" ); 

    if( numPennies == 100 ) 
      System.out.println( "I have a dollar" ); 

    // display actual number of pennies
    System.out.println( "I had " + numPennies + " pennies" ); 
  }
}
        </pre>

        This program generates a random number between 1 and 100 (inclusive),
        uses 4 if-statements to tell you roughly how much you have, then
        tells you the actual answer at the end. Run the program a few times
        and make sure you understand how the program works.
        <p>

        First, consider the following sample ouptut:
        <pre>
Guess how many pennies I have in my hands?
I have less than half a dollar
I have less than a dollar
I had 36 pennies
        </pre>

        <b>[1 pt]</b>
        Why did two sentences get displayed to tell me that I had less than
        half a dollar and less than a dollar? Although this is true, it's just
        silly to display such redundant information: if I have less than half
        a dollar then of course I also have less than a dollar! Why is the
        program doing this?
        Type up your answer to this question in a separate text file called
        <tt>pennies.txt</tt>.
        <p>

        <b>[1 pt]</b>
        Change the structure of the if-statements so that your program now
        uses 1 if-else statement to connect all four of these cases. What
        happens to your program?
        Type up your answer to this question in a separate text file called
        <tt>pennies.txt</tt>.
        <p>

        <b>[1 pt]</b>
        Next, try changing the order of the conditions in your if-else
        statement and re-run your program. What changes occur in the output of
        the program? Why did this happen?
        Type up your answer to this question.
        <p>

        <b>[2 pts]</b>
        Now that you understand some of the variations of if-statements,
        organize your code so that:
        <ul>
        <li> It only displays one feedback statement each time.
        <li> The feedback statement describes the smallest range possible
        (e.g., 12 pennies should correspond to "I have less than a quarter"
        not "I have less than half a dollar").
        </ul>
        <p>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Compare Birthdates [10 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b>
        This exercise gives you practice designing and organizing
        if-statements. 
        First, create a program called <tt>WhoIsOlder</tt>.
        <p>

        Since the purpose of this exercise is to get you to understand how
		conditional statements work, <b>you will only get full marks if your
		solution does NOT use <tt>System.exit</tt>.</b> 
        <p>


        <b>[1 pt]</b>
        Prompt the user for your birthday and your friend's birthday in a
        specific format: enter the year (as an integer with 4 digits),
        enter the month (as an integer from 1 to 12), and enter the day (as an
        integer with 2 digits).
        <p>

        <b>[1 pt]</b>
        To keep date ranges reasonable, ensure that the year entered is
        between 1900 and the current year. Also, check that the month entered
        is between 1 and 12 (inclusive).
        <p>

        <b>[2 pts]</b>
        Next, check that the day entered is within a valid range based on the
        month entered and/or the year entered. For example, November only has
        30 days, and February only has 28 days on non-leap years.
        (Hint: Recall the leap year definition and code from the textbook and
        the slides.)
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
1899
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
1
Day of birth: 
1
Your birth year must be between 1900 and 2018
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
0
Day of birth: 
31
Your friend's birth month must be between 1 and 12
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2016
Month of birth (as an integer from 1 to 12): 
2
Day of birth: 
29
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2015
Month of birth (as an integer from 1 to 12): 
2
Day of birth: 
29
Your friend's birth day must be between 1 and 28
        </pre>
        <p>

        <b>[4 pts, one per case]</b>
        Once you have validated the two input dates, you can compare them to
        see who is older. You will want to consider the following cases:
        <ul>
        <li> One person is born in an earlier year
        <li> Two people are born in the same year, one is born in an earlier
        month
        <li> Two people are born in the same year and month, one is born on an
        earlier day
        <li> Two people are born in the same year, same month, and same day 
        </ul>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2011
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
You are older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
3
Day of birth: 
19
Your friend is older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2007
Month of birth (as an integer from 1 to 12): 
5
Day of birth: 
11
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2007
Month of birth (as an integer from 1 to 12): 
5
Day of birth: 
23
You are older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
You are the same age!
        </pre>
        <p>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
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
