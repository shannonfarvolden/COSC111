@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 5 [23 pts]</h2>
        <p>Working with Loops</p>
        The purpose of this lab is to give you hands on practice with loops.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li>Peer evaluation forms for your team
            <li><tt>Backwards.java</tt>
            <li><tt>backwards-trace.txt</tt>
            <li><tt>Pyramid.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Peer Evaluation Forms [2 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[2 pts]</b>
                The TA will distribute evaluation forms for you to complete. Be sure to
                complete one form for each member of your team. Based on the in-class
                activities you have done so far, evaluate each team member using the
                rubric provided.

            <p>
                This evaluation mark, when averaged across the team,
                will be used as a multiplier to the marks you received for the
                activities completed in class. For example, if your team received 10/10
                on an exercise, and your peer evaluation mark is 110%, then your
                individual mark for that exercise becomes 110% times 10/10 which is
                11/10. Likewise, if you got 10/10 on a team exercise but your peer
                evaluation mark is 50%, then your individual mark becomes 5/10.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. A String Backwards [9 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to print a string backwards
                First, create a program called <tt>Backwards</tt>.

            <p>
                <b>[1 pt]</b>
                Read in a string from the user and store it into a <tt>String</tt> type
                variable.

            <p>
                <b>[2 pts]</b>
                Check that the string entered has more than 3 characters. If it's too
                short, ask the user to enter a longer string. Use a loop to keep asking
                until you get a string with more than 3 characters in it.

            <p>
                <b>[1 pt]</b>
                Develop a loop statement that loops through the string variable,
                starting from the last character, and working backwards to the first
                character. Ensure you have the correct stopping criterion and counter
                update.

            <p>
                <b>[1 pt]</b>
                In the body of the loop, display the character at the position of the
                loop iteration.

            <p>
                Sample output:
      <pre>
Enter a string:
hi
Enter a longer string:
now
Enter a longer string:
hey jude
eduj yeh
      </pre>

            <p>
                <b>[2 pts]</b>
                Provide a table showing a trace of the variable changes at each loop
                iteration for the string "chimp". The table should have the columns:
                iteration number, the loop variable, and the letter extracted and
                printed in that iteration. (If you are not sure what is expected, check
                the slides and/or ask the TA.) Type up the table in a text document called backwards-trace.txt.

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. A Pyramid Pattern [12 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to work on nested loops.
                First, create a program called <tt>Pyramid</tt>.
                By the end of the program, you will be able to display a pyramid shaped
                pattern as shown in the sample output below.

            <p>
                Sample output (when you are done):
      <pre>
Enter a number between 1 and 9 (inclusive):
32
Enter a number between 1 and 9 (inclusive):
-1
Enter a number between 1 and 9 (inclusive):
0
Enter a number between 1 and 9 (inclusive):
4
      1
    2 1 2
  3 2 1 2 3
4 3 2 1 2 3 4
      </pre>

            <p>
                Another sample output (when you are done):
      <pre>
Enter a number between 1 and 9 (inclusive):
9
                1
              2 1 2
            3 2 1 2 3
          4 3 2 1 2 3 4
        5 4 3 2 1 2 3 4 5
      6 5 4 3 2 1 2 3 4 5 6
    7 6 5 4 3 2 1 2 3 4 5 6 7
  8 7 6 5 4 3 2 1 2 3 4 5 6 7 8
9 8 7 6 5 4 3 2 1 2 3 4 5 6 7 8 9
      </pre>

            <p>
                <b>[2 pts]</b>
                In your program, ask the user to enter a number between 1 and 9
                inclusive. Check that the number entered is within the specified range.
                If not, use a loop to keep asking the user to enter a valid number
                within that range until a valid number has been entered.

            <p>
                <b>[1 pt]</b>
                The number the user entered will be the height of the pyramid pattern.
                Store this number into a variable named <tt>num</tt>.
                Create a loop that prints some placeholder text <tt>num</tt> times.
                This will be the outer loop. Suppose your placeholder text is to print
                "1" <tt>num</tt> times. Then the sample output (so far) will look like:

      <pre>
Enter a number between 1 and 9 (inclusive):
4
1
1
1
1
      </pre>

            <p>
                Inside the outer loop, there will be 3 inner loops. The following steps
                describe each of them separately.

            <p>
                <b>[3 pts]</b>
                The first inner loop will be responsible for printing the leading spaces
                that are in each line. Study the pyramid pattern given at the top and
                see how many leading spaces there are on each line before a number is
                printed. For example, the last row has 0 leading spaces, the second last
                row has 2, the third last row has 4, etc. Define a formula for this
                pattern based on <tt>num</tt> and the row number you are on. This
                information will be used in the loop. Then in the loop body, print out
                the appropriate number of spaces. To ensure you have the right number of
                spaces printed, add a placeholder text at the end so you can see the
                output more clearly. When you are done with this step, you should get
                the following
                sample output (so far):
      <pre>
Enter a number between 1 and 9 (inclusive):
4
      1
    1
  1
1
      </pre>

            <p>
                <b>[2 pts]</b>
                The second inner loop will be responsible for printing the numbers
                on the line counting downwards to 1. Study the pyramid pattern given at
                the top and see which numbers get printed on each line (up to 1). You
                will see that at the <tt>n</tt>'th row, the numbers printed at with
                <tt>n</tt>, then goes down to 1. Write a loop that prints this part of
                the numbers out. Ensure you have proper spacing. When you are done, you
                should get the following
                sample output (so far):
      <pre>
Enter a number between 1 and 9 (inclusive):
4
      1
    2 1
  3 2 1
4 3 2 1
      </pre>

            <p>
                <b>[2 pts]</b>
                The third inner loop will be responsible for printing the remaining
                numbers on the line that count upwards after 1.  Study the pyramid
                pattern given at the top and see which numbers get printed on each line
                (after 1). You will see that at the <tt>n</tt>'th row, the numbers
                printed after 1 count up until <tt>n</tt>. Write a loop that prints this
                part of the numbers out.  When you are done, you should get the
                following
                sample output:
      <pre>
Enter a number between 1 and 9 (inclusive):
4
      1
    2 1 2
  3 2 1 2 3
4 3 2 1 2 3 4
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