@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Lab 5 [32 pts]</h2>
    <p>Working with Loops</p>
    The purpose of this lab is to give you hands on practice with loops.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>CountConsonants.java</tt>
      <li><tt>CheckInput.java</tt>
      <li><tt>DrawX.java</tt>
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Count Consonants [11 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pts]</b>
      This exercise gets you to count the number of consonants there are in a
      given word. First, create a program called <tt>CountConsonants</tt>.

      <p>
      <b>[1 pt]</b>
      This exercise gets you to count the number of consonants there are in a
      given word. First, create a program called <tt>CountConsonants</tt>.

      <p>
      <b>[1 pt]</b>
      Ask the user to enter a word (of any length) and store it in a variable
      with a meaningful name.

      <p>
      <b>[2 pts]</b>
      Figure out how many letters there are in this word, and create a loop
      structure that iterates through each letter of the word. As a way of
      making sure that your loop works as expected, print out the value of the
      loop counter inside the loop. This will make sure you iterate through
      the loop one letter at a time and that the loop terminates.
      <b>Make sure you get this working</b> before adding more statements into
      the body of the loop.

      <p>
      Sample output:
      <pre>
Enter a word
silly
i = 0
i = 1
i = 2
i = 3
i = 4
      </pre>
      Because the word entered has 5 letters, the loop iterates 5 times (from
      0 to 4).
      <p>
      Another sample output:
      <pre>
Enter a word
doppelganger
i = 0
i = 1
i = 2
i = 3
i = 4
i = 5
i = 6
i = 7
i = 8
i = 9
i = 10
i = 11
      </pre>
      Because the word entered has 12 letters, the loop iterates 12 times (from
      0 to 11).

      <p>
      <b>[1 pt]</b>
      Next, create a counter that keeps track of the number of consonants you
      come across in the word. Think carefully: where will you declare this
      counter?

      <p>
      <b>[2 pts]</b>
      Now, work on the loop body. First, get a letter from the word. If your
      loop counter is called <tt>i</tt>, then get the i'th letter of the word.
      Compare it and see if it is a consonant.

      <p>
      <b>[1 pt]</b>
      If the comparison results in a consonant, increase the counter by 1. If
      the letter is instead a vowel, don't modify the counter.

      <p>
      <b>[1 pt]</b>
      Finally, display the number of consonants there are in total. Note that
      if there is only 1 consonant, you will need to print in singular form,
      but if there are more than 1 consonants, you will print in plural.

      <p>
      Sample output:
      <pre>
Enter a word
silly
letter at position i = 0 is a consonant
letter at position i = 2 is a consonant
letter at position i = 3 is a consonant
letter at position i = 4 is a consonant
There are 4 consonants.
      </pre>
      <p>
      Another sample output:
      <pre>
Enter a word
audio
letter at position i = 2 is a consonant
There are 1 consonant.
      </pre>

      <p>
      <b>[1 pt]</b>
      Lastly, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Checking Invalid Input [8 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise gets you to practice checking for invalid user input.
      First, create a program called <tt>CheckInput</tt>.

      <p>
      <b>[1 pt]</b>
      Ask the user to enter an even number between 5 and 20 inclusive.

      <p>
      <b>[2 pts]</b>
      Write a loop that checks the number entered by the user is indeed even
      and within range. Which loop structure is more natural to use in this
      case?

      <p>
      <b>[1 pt]</b>
      Inside the loop body, ask the user to enter the number again.

      <p>
      <b>[1 pt]</b>
      Once the input is valid, display it back to the user.

      <p>
      <b>[1 pt]</b>
      Then with 70 percent chance, display a number higher than the user's
      number, and with a 30 percent chance, display a number smaller than the
      user's number. Hint: model chance by generating a random number.

      <p>
      Sample output:
      <pre>
Enter an even number between 5 and 20:
2
Invalid input. Enter an even number between 5 and 20:
22
Invalid input. Enter an even number between 5 and 20:
5
Invalid input. Enter an even number between 5 and 20:
9
Invalid input. Enter an even number between 5 and 20:
12
Your number is: 12
My number is: 11
      </pre>
      <p>
      Another sample output:
      <pre>
Enter an even number between 5 and 20:
12
Your number is: 12
My number is: 13
      </pre>

      <p>
      <b>[1 pt]</b>
      Lastly, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.

    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">3. An X Pattern [13 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise gets you to work on nested loops. If you can successfully
      complete and understand how to write this program, you will be a master
      of loops! First, create a program called <tt>DrawX</tt>.
      By the end of the program, you will be able to display a pyramid shaped
      pattern as shown in the sample output below.

      <p>
      Sample output (when you are done):
      <pre>
How tall do you want the X to be?
3
*    *
 *  *
  **
 *  *
*    *
      </pre>

      <p>
      Another sample output (when you are done):
      <pre>
How tall do you want the X to be?
9
*                *
 *              *
  *            *
   *          *
    *        *
     *      *
      *    *
       *  *
        **
       *  *
      *    *
     *      *
    *        *
   *          *
  *            *
 *              *
*                *
      </pre>

      <p>
      <b>[1 pt]</b>
      In your program, ask the user to enter a the desired height of the X.
      Store this value into a variable with a meaningful name. This will
      determine how tall your pattern will be. As in the example above, if the
      user entered 3, then the upper half of the X has 3 rows.

      <p>
      <b>[1 pt]</b>
      The first step in drawing the X pattern is to draw the upper left
      stroke. This will require a nested loop. Before you make the nested
      loop, let's start with just one loop. Define a loop that iterates 3
      times (or whatever height is) and at each iteration, print "*". At this
      point, your output should look like this:

      <pre>
How tall do you want the X to be?
3
*
*
*
      </pre>

      <p>
      <b>[2 pts]</b>
      Inside that loop, create another loop that introduces a space into each
      line. Specifically, each time we progress to the next line, an
      additional space is drawn. Now, your output should look like this:

      <pre>
How tall do you want the X to be?
6
*
 *
  *
   *
    *
     *
      </pre>

      <p>
      <b>[2 pts]</b>
      Once you've got that drawn, we will work on the lower left side so the
      pttern will look like >. Below the nested loop you just finished, create
      a second nested loop. The number of rows this nested loop iterates is
      also <tt>height</tt>, but the inner loop will start off printing more
      spaces and decrease as we progress down each row. Try to use the nested
      loop that you've written already as an example and mirror the work. When
      you have completed this step, your output should look like this:

      <pre>
How tall do you want the X to be?
4
*
 *
  *
   *
  *
 *
*
      </pre>

      <p>
      Make sure your program works as above before moving on to the next step.
      The next step is to complete the upper half by drawing the top right
      side. To do this, you will be editing the first nested loop that you
      created.

      <p>
      <b>[1 pt]</b>
      Inside the first nested loop, you now have one for loop responsible for
      drawing the left side. Now you will need another for loop beneath it
      that is responsible for drawing the right side to make the V. In this
      loop, you will be drawing some spaces then one star "*" on each line. To
      make this work, you will want to modify the println statement you wrote
      in the first loop that is responsible for drawing the left side so that
      it becomes a <tt>print</tt> statement instead of <tt>println</tt>.

      <p>
      <b>[2 pts]</b>
      To make this loop work, the logical steps are the same -- you want to
      draw some number of spaces (the exact number varies line by line) and
      then draw one star. Try to work out by hand what that exact number
      should be. For example, when the overall X pattern has height 4, how
      many spaces are to be printed on each line? What if the height was 9, or
      15? Can you identify a formula to that can capture the variation? This
      formula will be what's used in defining where the loop counter starts
      and stops. Once you've figured it out, your output should look ike this:

      <pre>
How tall do you want the X to be?
4
*      *
 *    *
  *  *
   **
  *
 *
*
      </pre>

      <p>
      Make sure your program works as above before moving on to the next step.
      The last step is to complete the X pattern by drawing the lower right
      side. To do this, you will be editing the second nested loop in your
      program.

      <p>
      <b>[2 pts]</b>
      Inside the second nested loop, you already have one loop that is
      responsible for drawing the left side. Now add a second loop that is
      responsible for drawing the right side. The formula to make this work
      will resemble what you just did for the upper right side. If you are
      stuck, try to identify manually the number of spaces that are needed for
      each line and figure out what that formula looks like. When you are
      done, your output should look like this:
      <pre>
How tall do you want the X to be?
4
*      *
 *    *
  *  *
   **
  *  *
 *    *
*      *
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
