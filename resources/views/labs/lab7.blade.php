@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 7 [xx pts]</h2>
        <p>Working with Arrays</p>
        The purpose of this lab is to give you hands on practice with arrays,
        from declaring them, initializing them, passing them as arguments, as
        well as reading from and writing to them. If you need clarification
        with any of the steps below, ask your TA and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Part1.txt
            <li>Race.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Short Exercises [13 pts]</h3>
        </div>
        <div class="panel-body">
        This exercise gets you to do a series of short exercises pertaining to
        arrays. The answers for this part of the lab will need to be typed up
        and saved into a text document called <tt>Part1.txt</tt>.
        <p>
        <ol>
        <li> <b>[2 pts: 1 pt for proper statement, 1 pt for rationale]</b>
        Declare an array that stores 50 exam scores. Give a point-form
        explanation of the data type you've chosen.
        
        <li> <b>[2 pts: 1 pt for proper statement, 1 pt for rationale]</b>
        Declare an array that stores 120 student names. Give a point-form
        explanation of the data type you've chosen.

        <li> <b>[1 pt]</b>
        Given an array called <tt>rankings</tt>, assign its fifth element to
        -1.
        
        <li> <b>[1 pt]</b>
        Given an array called <tt>rankings</tt>, assign its second last
        element to 10.
        
        <li> <b>[3 pts: 1 pt for array declaration, 1 pt for loop, 1 pt for
        proper random initializations]</b>
        Declare an array that stores N characters, where N can be anything
        between 10 and 50 (inclusive). Initialize each array element to random
        characters.

        <li> <b>[4 pts: 1 pt for method header and return statement, 1 pt for
        loop, 1 pt for finding correct index, 1 pt for break]</b>
        Create a method that takes an array of doubles called <tt>weights</tt>
        as input, and returns the index of the first element whose value is
        less than 90. If no such element exists, return -1. Complete the
        method body as needed.
        </ol>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Visualizing a Running Race [xx pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to generate some random numbers to represent
        how fast people are running at a given time, and to visualize the
        status of the race. First, create a program called <tt>Race</tt>.
        <p>

        <b>[1 pt]</b> 
        Create an integer constant to represent that this ia a 100 meter
        running race. As this program will visualize the status of the race,
        we will only be able to visualize it at certain time intervals. Create
        another constant to indicate that we define the time intervals to be
        25.
        <p>

        <b>[1 pt]</b> 
        This race has 2 contestants named Guido and Sally. Correspondingly,
        define a character array for each contestant with 100 possible
        elements (use your constants). The idea is that throughout the race,
        these contestants will run a random number of meters at each time
        interval, that progress will be stored into the arrays and displayed
        for us to see, and one of them will finish the 100 meter race first.
        <p>

        Sample output, when Sally wins (by the end of the program):
        <pre>
*** Ready, Set, Go! ***

G
SSSSSSSSSSSS

GGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

First place is Sally!
Won by 58 meters!
        </pre>
        The visualization shows that each meter ran by Guido is shown as 'G'
        and each meter ran by Sally is shown as 'S'. At the end in this
        example, we see that Guido is only about halfway done the race when
        Sally finishes. <b>If you count each character, you will see 58 more
        'S' than 'G' in the last interval.</b>
        <p>

        Another sample output, when Guido wins (by the end of the program):
        <pre>
*** Ready, Set, Go! ***

GGGGGGGGGG
SSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

First place is Guido!
Won by 26 meters!
        </pre>

        Sample output, when the two finish at the same time (by the end of the program):
        <pre>
*** Ready, Set, Go! ***

GGGGGGGGGGGGG
SSSSSSS

GGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

First place is a tie!
They crossed the finish line at the same time!
        </pre>
        It is also possible that the two reach the finish line at the same
        time. In that case, we just report that it's a tie.

        <b>[1 pt]</b> 
        To get your program to produce sample output similar to the above,
        your <tt>main</tt> method will need a loop that continues to display
        one running interval until either Guido finishes or Sally finishes the
        race. To do this, you will want to declare and initialize two progress
        variables (one for each contestant) and end the loop as soon as one of
        the progress exceeds 100.
        <p>

        The next few steps focuses on what goes inside this <tt>while</tt> loop.
        <p>

        <b>[1 pt]</b> 
        First, read in an empty line of input from the user. In other words,
        create a <tt>Scanner</tt> object above (outside the loop) and call it
        here. You don't have to store the input from the user; just discard
        it. In this way, the user can type anything, or just press the
        <tt>Return</tt> key, and the loop will iterate once.
        <p>

        <b>[1 pt]</b> 
        Second, generate a random number of steps for Guido to run, where this
        random number should be between 0 and 25 (again, use your constants).
        Do the same for Sally.
        <p>

        <b>[3 pts]</b> 
        Third, to update a contestant's progress in the character array,
        define a method with the following header:<br>
        <tt>public static char[] updateProgress( char[] runner, char ch, int upto ) </tt>
        <br>
        This method is given the contestant's character array, the character
        to display (so either 'G' or 'S'), and how many characters to store
        into the array to keep track of the progress. Basically, this method
        will have a loop that sets the array to the given character from index
        0 to <tt>upto</tt>, then returns that array back to the <tt>main</tt>
        method.
        <p>

        <b>[2 pts]</b> 
        Fourth, call the <tt>updateProgress</tt> method with Guido's array and
        Sally's array, so that their progress is updated into their character
        arrays. 
        <p>

        To ensure your code is working so far, you may want to insert some
        <tt>println</tt> statements just to see what numbers are generated.
        You can comment these out or delete them later so to not clutter the
        output.
        <p>

        Partial sample output (so far):
        <pre>
*** Ready, Set, Go! ***

guido's dist     = 14
guido's progress = 14
sally's dist     = 24
sally's progress = 24

guido's dist     = 20
guido's progress = 34
sally's dist     = 10
sally's progress = 34

...
        </pre>
        Once you are convinced your output makes sense, continue with the
        following.
        <p>

        <b>[3 pts]</b> 
        Fifth, define a method that prints the progress onto the screen so
        that we can see the status of the race. Define a method with the
        following header:<br>
        <tt>public static void prRacePath( char[] runner )</tt>
        <br>
        This method takes a contestant's character array, and displays it to
        the screen.
        <p>

        <b>[1 pt]</b> 
        Sixth, call the <tt>prRacePath</tt> method in the loop so we can see
        the status of the race. 
        <p>

        Partial sample output (so far, with the distance and progress
        <tt>println</tt> statements commented out):
        <pre>
*** Ready, Set, Go! ***

GGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSS

GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

...
        </pre>

        You are almost done! Your program should now be able to show you the
        full race. Run it a few times to make sure it is working as expected.
        <p>

        <b>[1 pt]</b> 
        Once you are happy with the program, the final step is to report the
        winner. Inside the <tt>main</tt> method but after your <tt>while</tt>
        loop, display the race results. 
        <p>
        
        <b>[2 pts]</b> 
        In your report, you will need to indicate who the winner is, and how
        many meters that contestant won by. To do this properly, you will need
        to add some code in the <tt>while</tt>loop to see who won first and
        calculate the winning distance. Once you get this working, your
        program's output will be like the ones shown in the beginning of this
        exercise.
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
