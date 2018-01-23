@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 5 [29 pts]</h2>
        <p>Working with Loops</p>
        The purpose of this lab is to give you hands on practice with loops.
        If you need clarification with any of the steps below, ask your TA
        and/or your neighbour.
        <p></p>
        This is a longer lab, so you will have two lab periods to work on the
        exercises. 
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>CountWords.java
            <li>Validate.java
            <li>Pyramid.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
        At the beginning of the lab, show your TA for completing at least one
        attempt for Quiz 5.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Count Words [11 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to count the number of words there are in a
        given sentence. First, create a program called CountWords.
        <p>

        <b>[1 pt]</b> 
        Ask the user to enter a sentence and store it in a variable with a
        meaningful name.
        <p>

        <b>[2 pts]</b> 
        Figure out how many words there are in this sentence by counting the
        number of spaces it has. You can do this by creating a loop structure
        that iterates through each letter of the sentence and then counting
        the spaces you encounter (which we will do below). 
        To ensure your loop works as expected, print out the value of the loop
        counter inside the loop. This will make sure you iterate through the
        loop one letter at a time and that the loop terminates.
        <b>Make sure you get this working</b> before adding more statements
        into the body of the loop.
        <p>

        Sample output:
        <pre>
Enter a sentence: 
hi there
i = 0
i = 1
i = 2
i = 3
i = 4
i = 5
i = 6
i = 7
        </pre>

        <b>[1 pt]</b> 
        Next, create a counter that keeps track of the number of spaces you
        come across in the sentence. Think carefully: where will you declare
        this counter?
        <p>

        <b>[2 pts]</b> 
        Now, work on the loop body. First, get a letter from the sentence at
        the current loop position (if your loop counter is called <tt>i</tt>,
        then grab the letter at index <tt>i</tt>). Check if that letter is a
        whitespace.
        To check if a given letter is a space, you can use the method
        <tt>isWhitespace</tt> that is available from the <tt>Character</tt>
        class. This is a static method, which means you can call it just like
        you call any <tt>Math</tt> methods.
        <p>

        <b>[1 pt]</b> 
        If the comparison results in a whitespace, increase the counter by 1.
        Otherwise, don't modify the counter.
        <p>

        <b>[1 pt]</b> 
        Augment your print statement from before so that it displays the
        position of the whitespace within the sentence.
        <p>

        <b>[1 pt]</b> 
        Finally, display the number of words there are in total. Be careful
        that the number of words is <b>one</b> more than the number of
        whitespaces you count. Also, note that there is only 1 word in the
        entire sentence, you will need to print in singular form, but if there
        is more than 1 word, you will print in plural form.
        <p>

        Sample output:
        <pre>
Enter a sentence: 
boo
reached end of sentence
There is 1 word in your sentence
        </pre>

        Sample output:
        <pre>
Enter a sentence: 
hey you
i = 3 is a whitespace
reached end of sentence
There are 2 words in your sentence
        </pre>

        Sample output:
        <pre>
Enter a sentence: 
this is going to be a very long sentence to type
i = 4 is a whitespace
i = 7 is a whitespace
i = 13 is a whitespace
i = 16 is a whitespace
i = 19 is a whitespace
i = 21 is a whitespace
i = 26 is a whitespace
i = 31 is a whitespace
i = 40 is a whitespace
i = 43 is a whitespace
reached end of sentence
There are 11 words in your sentence
        </pre>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Checking Invalid Input [8 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to use a loop to check for invalid user input.
        First, create a program called <tt>Validate</tt>.
        <p>

        <b>[1 pt]</b> 
        Ask the user to enter a word that begins with a vowel.
        <p>

        <b>[2 pts]</b> 
        Check if the first letter of the given word is a vowel or not. If not,
        use a loop to ask the user to enter another word until a valid word is
        provided. Which loop structure is more natural to use in this case?
        <p>

        <b>[1 pt]</b> 
        Inside the loop body, ask the user to enter another word again.
        <p>

        <b>[1 pt]</b> 
        Once the input is valid, display it back to the user.
        <p>

        Sample output so far:
        <pre>
Enter a word that begins with a vowel: 
helium
Invalid input. Enter a word that begins with a vowel: 
stone
Invalid input. Enter a word that begins with a vowel: 
caramel
Invalid input. Enter a word that begins with a vowel: 
outside
Your word is: outside
        </pre>

        <b>[1 pt]</b> 
        Next, with 60 percent chance, display a word that begins with a
        consonant (pick any word), and with 40 percent chance, display a word
        that also begins with a vowel (pick a word). Hint: model chance by
        generating a random number.
        <p>

        Sample output:
        <pre>
Enter a word that begins with a vowel: 
east
Your word is: east
My word starts with a vowel too: apple
        </pre>

        Sample output:
        <pre>
Enter a word that begins with a vowel: 
tent
Invalid input. Enter a word that begins with a vowel: 
user
Your word is: user
My word starts with a consonant: banana
        </pre>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">4. A Pyramid Pattern [9 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to work on nested loops. If you can
        successfully complete and understand how to write this program, you
        will be a master of loops! First, create a program called Pyramid. By
        the end of the program, you will be able to display a pyramid shaped
        pattern as shown in the sample output below.
        <p>

        Sample output (when you are done):
        <pre>
How high do you want the pyramid to be?
3
   1 
  2 2 
 3 3 3 
        </pre>

        Sample output (when you are done):
        <pre>
How high do you want the pyramid to be?
7
       1 
      2 2 
     3 3 3 
    4 4 4 4 
   5 5 5 5 5 
  6 6 6 6 6 6 
 7 7 7 7 7 7 7 
        </pre>

        <b>[1 pt]</b> 
        In your program, ask the user to enter a the desired height of the
        pyramid. Store this value into a variable with a meaningful name. This
        will determine how tall your pattern will be. As in the example above,
        if the user entered 3, then the pyramid will have 3 rows.
        <p>

        <b>[1 pt]</b> 
        The first step is to make a loop structure that iterates through the
        total number of rows of the desired height.
        Define a loop that iterates 3 times (or whatever height is) and at
        each iteration, print "*". At this point, your output should look like
        this:
        <p>

        Sample output (so far):
        <pre>
How high do you want the pyramid to be?
3
*
*
*
        </pre>

        <b>[2 pts]</b> 
        Inside that loop, create an inner loop that introduces a space onto
        each line. Specifically, we start off with a lot of spaces (how
        many?), then each time we progress to the next line, we draw one
        fewer space. This tells us that the inner loop should count down. Now,
        your output should look like this:
        <p>

        Sample output (so far):
        <pre>
How high do you want the pyramid to be?
5
*****
****
***
**
*
        </pre>

        <b>[1 pt]</b> 
        After you print the stars on each line and before you go onto the next
        line, you will need to print some numbers on each row. 
        For now, just print a single number at the end of each row, and have
        that number increase on each row.
        <p>

        Sample output (so far):
        <pre>
How high do you want the pyramid to be?
4
****1
***2
**3
*4
        </pre>

        <b>[1 pt]</b> 
        In our pyramid, we need to have the numbers repeat on each row. In
        particular, the "1" on row 1 appears once, the "2" on row 2 appears
        twice, the "3" on row 3 appears 3 times, and so forth. In general, we
        want the k'th number to appear k times. 
        So rather than printing a single number on each row, we want to change
        that statement so that it is a loop that prints the k'th number k
        times, depending on which row it is on. 
        <p>

        Sample output (so far):
        <pre>
How high do you want the pyramid to be?
5
*****1 
****2 2 
***3 3 3 
**4 4 4 4 
*5 5 5 5 5 
        </pre>

        <b>[1 pt]</b> 
        Clean up those stars by changing them back to print a whitespace
        instead. Now you will have your pyramid!
        <p>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
        </div>
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
