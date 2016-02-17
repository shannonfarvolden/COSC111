@extends('app')

@section('content')
<div class="jumbotron">
    <h2>Lab 6 [39 pts]</h2>
    <p>Working with Methods</p>
    The purpose of this lab is to give you hands on practice with calling
    methods, modifying existing methods, and creating your own methods.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
        <li><tt>Smileys.java</tt> and <tt>Smileys-Answers.txt</tt>
        <li><tt>Cashier.java</tt>
        <li><tt>Box.java</tt>
    </ul>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">1. ASCII Emoticons [12 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            <b>[1 pt]</b>
            The following program has several methods defined which prints out an
            emoticon in ASCII format. Load this program into Eclipse and run it.
            You can type it in line by line as written below, or you can download it
            from this file <a
                    href="/documents/Smileys.java"><tt>Smileys.java</tt></a>.
            Try running it a few times and make sure you understand how it works.
      <pre>
1  public class Smileys
2  {
3    public static void main( String[] args )
4    {
5      laugh();
6      wink();
7      cry();
8      hoot();
9    }
10
11   public static void laugh()
12   {
13     System.out.println( "(^u^)" ); // happy face
14   }
15
16   public static void wink()
17   {
18     System.out.println( "(>.^)" ); // happy wink
19   }
20
21   public static void cry()
22   {
23     System.out.println( "(T.T)" ); // eyes with tears
24   }
25
26   public static void hoot()
27   {
28     System.out.println( "(O.o)" ); // owl face
29   }
30
31   public static void what()
32   {
33     System.out.println( "(?_?)" ); // confused face
34   }
35 }
      </pre>

        <p>
            <b>[1 pt]</b>
            Try modifying lines 5-8 inside the <tt>main</tt> method by changing the
            order of those lines. Explain what happens to the output if you changed
            the order of those lines of code.
            Type up your response in a file called <tt>Smileys-Answers.txt</tt>.

        <p>
            <b>[1 pt]</b>
            Try modifying lines 5-8 inside the <tt>main</tt> method by deleting any
            two of those lines. Explain what happens to the output when you do that.
            Record your answer in <tt>Smileys-Answers.txt</tt> as well.

        <p>
            <b>
                Complete the rest of this question by editing the <tt>main</tt> method
                only. If you manage to write a program that generates the same output,
                but you ended up modifying the other methods, you still will not get any
                marks for this question.
            </b>

        <p>
            <b>[1 pt]</b>
            Modify the <tt>main</tt> method so that it asks the user "How are you
            feeling today?"

        <p>
            <b>[6 pts, one for each condition]</b>
            Based on what the user types, you will do the following:
        <ul>
            <li>If the user types "sad", call the method <tt>cry</tt>
            <li>If the user types "suspicious", call the method <tt>hoot</tt>
            <li>If the user types "flirty", call the method <tt>wink</tt>
            <li>If the user types "happy" or "playful", call the method <tt>laugh</tt>
            <li>If the user types "exit", then stop asking the user (which ends the
                program)
            <li>If the user types anything else, call the method <tt>what</tt>
        </ul>
        Hint: you may want to use the method <tt>contains</tt> in the
        <tt>String</tt> class.
        <p>

        <p>
            <b>[1 pt]</b>
            Ensure that your program repeatedly asks the user "How are you feeling
            today?" until the user types "exit".

        <p>
            Sample output:
      <pre>
How are you feeling today?
sad
(T.T)
How are you feeling today?
happy!
(^u^)
How are you feeling today?
joy
(?_?)
How are you feeling today?
loved
(?_?)
How are you feeling today?
very flirty
(>.^)
How are you feeling today?
exit
      </pre>

        <p>
            <b>[1 pt]</b> Lastly, be sure to write comments above your class to
            indicate the author of this file (you), acknowledgements for any
            external help you got, and what the purpose of this program is.
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">2. T-Shirt Purchase [13 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            <b>[1 pt]</b>
            The following program allows the user to select a cartoon print on a
            t-shirt and tallies up the cost of the purchase.
            Load this program into Eclipse and run it.
            You can type it in line by line as written below, or you can download it
            from this file <a
                    href="/documents/Cashier.java"><tt>Cashier.java</tt></a>.
            When you run it as is, you program should look like the following sample
            output:
      <pre>
Which cartoon t-shirt do you want to buy?
1. Bugs Bunny
2. Bart Simpson
3. Pinky and the Brain
4. The Powerpuff Girls
2
How many do you want to buy?
5
      </pre>

        <p>
            In the downloaded program, you will see that certain parts of the
            <tt>main</tt> method are missing and two additional methods are
            partially defined below the <tt>main</tt> method.
            Your job is to complete this program.

        <p>
            <b>[2 pts]</b>
            As you may have noticed, there is no user input validation currently in
            place. Write a loop that keeps asking the user for a valid menu option
            until one is entered. When you are done, test the program and make sure
            it works as expected.

        <p>
            <b>[1 pt]</b>
            Although the user's selected menu option is input as an integer, we
            would actually want to store the cartoon character as a string. Write a
            conditional statement that does this so that the <tt>cartoon</tt>
            variable stores the appropriate character name in a string.

        <p>
            <b>[3 pts: 1 pt for input, 1 pt for output, 1 pt for return statement]</b>
            Take a look at the <tt>getTotal</tt> method.
            This method takes the unit price of $5 per t-shirt, multiplies that by
            the desired <tt>quantity</tt> and adds 5% tax to the total.
            In order for this method to work with the rest of the program, you will
            need to specify the input parameter to accept <tt>quantity</tt> as an
            argument and the output to be the calculated total of the purchase.
            Fix this method accordingly.

        <p>
            <b>[3 pts: 1 pt for input, 1 pt for output, 1 pt for return statement]</b>
            Take a look at the <tt>compose</tt> method.
            This method displays the purchase summary by indicating which cartoon
            t-shirt item was bought, how many, and the total cost of that purchase
            by calling the <tt>getTotal</tt> method.
            In order for this method to work with the rest of the program, you will
            need to specify two input parameters <tt>amount</tt> and <tt>item</tt>
            and the output to be the summary message as a string.
            Fix this method accordingly.

        <p>
            <b>[1 pt]</b>
            In the <tt>main</tt> method, call the <tt>compose</tt> method with the
            appropriate arguments for input.

        <p>
            <b>[1 pt]</b>
            Since the <tt>compose</tt> method returns a string, after you call it,
            be sure to display the string output.

        <p>
            <b>[1 pt]</b> Lastly, be sure to write comments above your class to
            indicate the author of this file (you), acknowledgements for any
            external help you got, and what the purpose of this program is.
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">3. ASCII Box [14 pts]</h3>
    </div>
    <div class="panel-body">
        <p>
            <b>[1 pt]</b>
            This exercise draws a frilly box in ASCII (see sample output below).
            First, create a program called <tt>Box</tt>.

        <p>
            <b>[1 pt]</b>
            Asks the user for the width and height of the box that will be drawn.

        <p>
            <b>[1 pt]</b>
            Create a method called <tt>drawEdge</tt> that draws only the top edge of
            the box. This line starts with a plus sign "+", followed by a series of
            "/\", then ends with another plus sign "+".

        <p>
            <b>[2 pts]</b>
            In the <tt>drawEdge</tt> method, display "+", display a series of "/\",
            and display a final "+" all on the same line. The number of "/\" is
            determined by the width that is specified by the user.

        <p>
            <b>[1 pt]</b>
            In the <tt>main</tt> method, call <tt>drawEdge</tt> and make sure the
            program runs properly. At this point, your program will generate the
            following sample output (so far):
      <pre>
How wide will the box be?
8
How tall will the box be?
3
+/\/\/\/\/\/\/\/\+
      </pre>

        <p>
            <b>[1 pt]</b>
            Create another method called <tt>drawWalls</tt> that draws the body of
            the box. Each line starts with a veritical bar "|", followed by a series of
            two blanks "  ", then ends with another veritical bar "|".

        <p>
            <b>[2 pts]</b>
            In the <tt>drawWalls</tt> method, display "|", display a series of "  ",
            and display a final "|" all on the same line. The number of "  " is
            determined by the width that is specified by the user earlier.

        <p>
            <b>[2 pts]</b>
            Once you got that to work, your <tt>drawWalls</tt> method will display
            one line only. Modify this method so that you draw those lines
            repeatedly to get to the desired height of the box. The number of such
            lines to draw is
            determined by the height that is specified by the user earlier.
            Hint: you will need a nested loop.

        <p>
            <b>[1 pt]</b>
            In the <tt>main</tt> method, call <tt>drawWalls</tt> and make sure the
            program runs properly. At this point, your program will generate the
            following sample output (so far):
      <pre>
How wide will the box be?
8
How tall will the box be?
3
+/\/\/\/\/\/\/\/\+
|                |
|                |
|                |
      </pre>

        <p>
            <b>[1 pt]</b>
            When the above is working, call <tt>drawEdge</tt> again in the
            <tt>main</tt> method. Now you will have a frilly looking box!

        <p>
            Sample output:
      <pre>
How wide will the box be?
8
How tall will the box be?
3
+/\/\/\/\/\/\/\/\+
|                |
|                |
|                |
+/\/\/\/\/\/\/\/\+
      </pre>

        <p>
            Sample output:
      <pre>
How wide will the box be?
5
How tall will the box be?
9
+/\/\/\/\/\+
|          |
|          |
|          |
|          |
|          |
|          |
|          |
|          |
|          |
+/\/\/\/\/\+
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