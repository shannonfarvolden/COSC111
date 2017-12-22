@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Lab 6 [38 pts + 2 bonus]</h2>
    <p>Working with Methods</p>
    The purpose of this lab is to give you hands on practice with calling
    methods, modifying existing methods, and creating your own methods.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>Smiley.java</tt> and <tt>Smiley-Answers.txt</tt>
      <li><tt>Song.java</tt>
      <li><tt>Box.java</tt>
    </ul>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Completed survey mark [2 pts bonus]</h3>
    </div>
    <div class="panel-body">
      At the beginning of the lab, show your TA that you have completed Survey
	  2. Note that the surveys are anonymous so we can't check who completed
	  it and who didn't. Once you have submitted, you will need to show the TA
	  the notification message. If you leave that screen, we won't be able to
	  grade it.
      <p>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. ASCII Emoticons [13 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      The following program has several methods defined which prints out an
      emoticon in ASCII format. Load this program into Eclipse and run it.
      You can type it in line by line as written below (without the line
	  numbers on the left hand side).
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
9      what();
10   }
11 
12   public static void laugh()
13   {
14     System.out.println( "(^u^)" ); // happy face
15   }
16 
17   public static void wink()
18   {
19     System.out.println( "(>.^)" ); // happy wink
20   }
21 
22   public static void cry()
23   {
24     System.out.println( "(T.T)" ); // eyes with tears
25   }
26 
27   public static void hoot()
28   {
29     System.out.println( "(O.o)" ); // owl face
30   }
31 
32   public static void what()
33   {
34     System.out.println( "(?_?)" ); // confused face
35   }
36 }
      </pre>

      <p>
      <b>[1 pt]</b>
      Try modifying lines 5-9 inside the <tt>main</tt> method by changing the
      order of those lines. Explain what happens to the output if you changed
      the order of those lines of code. 
      Type up your response in a file called <tt>Smiley-Answers.txt</tt>.

      <p>
      <b>[1 pt]</b>
      Try modifying lines 5-9 inside the <tt>main</tt> method by deleting any
      two of those lines. Explain what happens to the output when you do that.
      Record your answer in <tt>Smiley-Answers.txt</tt> as well.

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
      <b>[1 pt]</b>
	  After the loop is finished, print out "Thank you for playing".

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
Thank you for playing.
      </pre>

      <p>
      <b>[1 pt]</b> Lastly, be sure to write comments above your class to
      indicate the author of this file (you), acknowledgements for any
      external help you got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">3. Song Lyrics [9 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      Write a program that prints out song lyrics. The purpose of this
	  exercise is for you to recognize repetitive patterns and to write
	  methods for them. First, create a program called <tt>Song</tt>.

      <p>
      <b>[1 pt]</b>
	  Below the <tt>main</tt> method, define a method called <tt>repeat</tt>
	  with the following header: <tt>public static void repeat()</tt>. This
	  method does not take any arguments and does not return anything.
	  You don't have to put anything into the body of the method yet, we will
	  do that later.

      <p>
      <b>[1 pt]</b>
	  Inside the <tt>main</tt> method, call the <tt>repeat</tt> method
	  twice. This is the only code that goes into the <tt>main</tt> method.

      <p>
      <b>[1 pt]</b>
	  Next, define another method called <tt>lyrics</tt> with the following
	  header: <tt>public static String lyrics( String clothing )</tt>. This
	  method takes an argument of type <tt>String</tt> and returns another
	  <tt>String</tt> variable.

      <p>
      Now, we will work on the body of the <tt>lyrics</tt> method. The goal is
	  to get it to create a <tt>String</tt> with the following words.
	  <b>Note that the <tt>lyrics</tt> method does not actually print anything.</b>
	  <pre>
Who is wearing a t-shirt, a t-shirt, a t-shirt?
Who is wearing a t-shirt?
Please stand up!
	  </pre>

      <p>
      <b>[1 pt]</b>
      First, you will want to define a <tt>String</tt> variable that stores
	  all those words. Notice that the <tt>lyrics</tt> method takes an input
	  argument <tt>clothing</tt>. Substitute this variable into the
	  appropriate places into your string so that it can print any clothing
	  item that gets passed into the method. You will see how this works in
	  the next step.

      <p>
      <b>[1 pt]</b>
      Inside the <tt>repeat</tt> method, call <tt>lyrics</tt> with the
	  argument <tt>"t-shirt"</tt>. It will return a string. Print this string
	  out. 

      <p>
      <b>[1 pt]</b>
      Inside the <tt>repeat</tt> method, call <tt>lyrics</tt> with the
	  argument <tt>"jacket"</tt> and print that out as well. 
      Inside the <tt>repeat</tt> method, call <tt>lyrics</tt> with the
	  argument <tt>"dress"</tt> and print that out as well. So far, your
	  sample output will look like this (since you called the <tt>repeat</tt>
	  method twice inside <tt>main</tt>, your output will be double this):

      <pre>
Who is wearing a t-shirt, a t-shirt, a t-shirt?
Who is wearing a t-shirt?
Please stand up!

Who is wearing a jacket, a jacket, a jacket?
Who is wearing a jacket?
Please stand up!

Who is wearing a dress, a dress, a dress?
Who is wearing a dress?
Please stand up!
      </pre>

      <p>
      <b>[1 pt]</b>
      Add the remaining words into the <tt>repeat</tt> method so you get the
	  sample output below.

      <p> 
      Sample output:
      <pre>
Who is wearing a t-shirt, a t-shirt, a t-shirt?
Who is wearing a t-shirt?
Please stand up!

Who is wearing a jacket, a jacket, a jacket?
Who is wearing a jacket?
Please stand up!

Who is wearing a dress, a dress, a dress?
Who is wearing a dress?
Please stand up!

Here comes a big wind, a big wind, a big wind!
Here comes a big wind!
T-shirts blow away!

Who is wearing a t-shirt, a t-shirt, a t-shirt?
Who is wearing a t-shirt?
Please stand up!

Who is wearing a jacket, a jacket, a jacket?
Who is wearing a jacket?
Please stand up!

Who is wearing a dress, a dress, a dress?
Who is wearing a dress?
Please stand up!

Here comes a big wind, a big wind, a big wind!
Here comes a big wind!
T-shirts blow away!
      </pre>

      <p>
      <b>[1 pt]</b> Lastly, be sure to write comments above your class to
      indicate the author of this file (you), acknowledgements for any
      external help you got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">4. ASCII Box [14 pts]</h3>
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
      In the <tt>drawWalls</tt> method, display "|", display a series of
	  spaces "  ", and display a final "|" all on the same line. The number of
	  "  " is determined by the width that is specified by the user earlier.

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
