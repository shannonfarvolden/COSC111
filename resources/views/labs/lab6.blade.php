@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 6 [27 pts]</h2>
        <p>Working with Methods</p>
        The purpose of this lab is to give you hands on practice with calling
        methods, modifying existing methods, and creating your own methods. If
        you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>SimpleMath-Answers.txt
            <li>Song.java 
            <li>Calendar.java 
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Experimenting with Methods [6 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        The following program has several simple math methods defined.
        Type this program line by line into Eclipse and run it. Make sure you
        understand how it works. (Don't type in the line numbers on the left
        -- they are for reference only.)
        <p>
        <pre>
1   public class SimpleMath
2   {
3     public static void main( String[] args )
4     {
5       double x = 5.4;
6       double rez;
7     
8       rez = times2( x );
9       rez = div4( rez );
10      rez = plus1( rez );
11      rez = exponent3( rez );
12     
13      System.out.println( rez );
14    }
15
16    public static double plus1( double n )
17    {
18      return n + 1;
19    }  
20
21    public static double times2( double n )
22    {
23      double num = n * 2.0;
24      return num;
25    }
26
27    public static double exponent3( double n )
28    {
29      return Math.pow( n, 3 );
30    }
31
32    public static double div4( double n )
33    {
34      double num = n / 4.0;
35      return num;
36    }
37  }
        </pre>

        <b>[2 pts]</b> 
        Try modifying lines 8-11 inside the <tt>main</tt> method by changing
        the order of those lines. Explain what happens to the output if you
        changed the order of those lines of code. Type up your response in a
        file called SimpleMath-Answers.txt. 
        You should notice 2 things changing.
        <p>

        <b>[2 pts]</b> 
        Try modifying lines 8-11 inside the <tt>main</tt> method by deleting
        any two of those lines. Explain what happens to the output when you do
        that. Record your answer in SimpleMath-Answers.txt as well.
        You should notice 2 things changing.
        <p>

        <b>[1 pt]</b> 
        Put the 4 lines back as they were originally, matching the given code
        above. Now, change line 11 from "rez = exponent3( rez );"
        to "exponent3( rez );". Why did the output change to 3.7?
        Explain the changes in SimpleMath-Answers.txt.
        <p>

        <b>[1 pt]</b> 
        Next, consider the method definitions for <tt>plus1</tt> and
        <tt>exponent3</tt> where the calculated values are returned directly
        (i.e., the method only has 1 line of code). Then, consider the method
        definitions for <tt>times2</tt> and <tt>div4</tt> where the
        calculation is done first, stored in a newly declared variable called
        <tt>num</tt>, and then returns <tt>num</tt>. In effect, are there any
        differences between these two ways of defining the methods? 
        Provide your answer in SimpleMath-Answers.txt.
        <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Generating Song Lyrics [9 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b>
        Write a program that prints out song lyrics. The purpose of this
        exercise is for you to recognize repetitive patterns and to write the
        required method(s). First, create a program called <tt>Song</tt>.
        <p>
        
        The song you will generate in your program is called Five Green and
        Speckled Frogs. There are five verses in the song.
        Sample output (when you are done):
        <pre>
5 green and speckled frogs
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were 4 green speckled frogs
Gulp! Gulp! Gulp! Gulp! 

4 green and speckled frogs
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were 3 green speckled frogs
Gulp! Gulp! Gulp! 

3 green and speckled frogs
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were 2 green speckled frogs
Gulp! Gulp! 

2 green and speckled frogs
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were 1 green speckled frog
Gulp! 

1 green and speckled frog
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were no green speckled frog
        </pre>
        <p>
        Notice that most of the words in a verse stays the same. Therefore,
        you will want to create a method to print out a verse. 
        <p>

        <b>[1 pt]</b> 
        Create a method called <tt>verse</tt> that prints the words in one
        verse only. This method will take an integer as the input parameter
        and does not return anything. (The responsibility of this method is to
        print the words in a given verse.)
        <p>

        <b>[1 pt]</b> 
        Inside the <tt>verse</tt> method, when you are putting the words of
        the verse together, use that integer to display how many frogs there
        are at the beginning. For example, if the input argument is 5, then
        the first line will display "5 green and speckled frogs". Later in the
        verse, subtract one from this number, so that you can display how many
        frogs are left at the end. Following the example, the second last line
        will display "Then there were 4 green speckled frogs".
        <p>

        <b>[1 pt]</b> 
        The last line of the verse prints some number of "Gulp!" depending on
        how many frogs are left. In your method here, use a loop to display
        the number of "Gulp!" to print based on the number of frogs left.
        <p>

        <b>[1 pt]</b> 
        Call this method once in your <tt>main</tt> method by passing 5 in as
        the argument.
        <p>

        Sample output (so far):
        <pre>
5 green and speckled frogs
Sat on a speckled log
Eating some most delicious bugs
Yum! Yum!
One jumped into the pool
Where it was nice and cool
Then there were 4 green speckled frogs
Gulp! Gulp! Gulp! Gulp! 
        </pre>
        <p>

        <b>[1 pt]</b> 
        Next, in the <tt>main</tt> method, rather than just calling the
        <tt>verse</tt> method once, use a loop to call it 5 times, so that the
        song counts down the number of frogs until none are left. At this
        point, you should have output very similar to the sample output shown
        at the beginning of this exerise.
        <p>

        <b>[1 pt]</b> 
        To clean up the generated output, there are a couple of places that
        display "1 green speckled frogs" or "1 green and speckled frogs".
        Instead, we would like to display singular with "frog". Use a
        conditional statement to control for the number of frogs that the line
        displays and whether singular or plural should be used. In total, you
        should have two conditional statements inside the <tt>verse</tt> method.
        <p>

        <b>[1 pt]</b> 
        One more item to clean up is the last line of the song that currently
        displays "Then there were 0 green speckled frogs". Here, we would like
        to change it to properly display "Then there were no green speckled
        frog" -- no number is used and "frog" is singular. Expand the second
        conditional statement to handle the case where there are no frogs
        left so the last line prints the proper wording. By the end of this,
        you should have the same song lyrics that were displayed in the
        original sample output.
        <p>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. An ASCII Calendar [12 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise draws an ASCII calendar for March 2018. First, create a
        program called <tt>Calendar</tt>.
        <p>

        Sample output (when you are done):
        <pre>
|--------------------|
| S| M| T| W|Th| F| S|
|--------------------|
|  |  |  |  | 1| 2| 3|
| 4| 5| 6| 7| 8| 9|10|
|11|12|13|14|15|16|17|
|18|19|20|21|22|23|24|
|25|26|27|28|29|30|31|
|--------------------|
        </pre>
        <p>
        Aside from the first week, each week in March has 7 days printed,
        filling up the week from Sunday through Saturday. We will work on this
        first, and then worry about the first week that starts on Thursday.
        <p>
         
        <b>[1 pt]</b> 
        Define a method called <tt>printWeek</tt> that takes two integer
        parameters: One that indicates the numeric date that falls on the
        first day of the week on Sunday, and the second indicates the numeric
        date that falls at the end of the week on Saturday. This method will
        return nothing.
        <p>

        <b>[1 pt]</b> 
        Inside <tt>printWeek</tt>, use a loop to display the dates in a week
        based on the two given input arguments. You will also want to display
        a vertical bar "|" to separate out each day, and one more "|" at the
        end of the method. 
        <p>
        
        Hint: To ensure that all dates take up two spaces, you may want to use
        <tt>System.out.printf</tt>. 
        <p>

        <b>[1 pt]</b> 
        Inside <tt>main</tt>, call <tt>printWeek</tt> with the first full week in
        March by passing it arguments 4 and 10.
        <p>

        Sample output (so far):
        <pre>
| 4| 5| 6| 7| 8| 9|10|
        </pre>

        <b>[1 pt]</b> 
        Once you get this working, call the <tt>printWeek</tt> method several
        more times so it prints the other full weeks in March.
        <p>

        Sample output (so far):
        <pre>
| 4| 5| 6| 7| 8| 9|10|
|11|12|13|14|15|16|17|
|18|19|20|21|22|23|24|
|25|26|27|28|29|30|31|
        </pre>

        <b>[1 pt]</b> 
        Now, we will print the header inside the <tt>main</tt> method. Before
        you call <tt>printWeek</tt>, display the header showing the days of
        the week, as well as proper line separators in the calendar at the
        beginning and the end of the <tt>main</tt> method.
        <p>

        Sample output (so far):
        <pre>
|--------------------|
| S| M| T| W|Th| F| S|
|--------------------|
| 4| 5| 6| 7| 8| 9|10|
|11|12|13|14|15|16|17|
|18|19|20|21|22|23|24|
|25|26|27|28|29|30|31|
|--------------------|
        </pre>
        <p>
        The calendar is almost complete! It's just missing the first week in
        March.
        <p>

        <b>[1 pt]</b> 
        Inside <tt>main</tt>, call <tt>printWeek</tt> with 1 and 3 so that the
        calendar now displays the first week. (Note: spacing will be
        incorrect -- we will fix that next.)
        <p>

        Sample output (so far):
        <pre>
|--------------------|
| S| M| T| W|Th| F| S|
|--------------------|
| 1| 2| 3|
| 4| 5| 6| 7| 8| 9|10|
|11|12|13|14|15|16|17|
|18|19|20|21|22|23|24|
|25|26|27|28|29|30|31|
|--------------------|
        </pre>
        <p>
        What we would like to do is to have leading white spaces in the first
        week, so that the days 1, 2, 3, are pushed to the right and fall under
        Thursday, Friday, Saturday respectively.
        <p>

        <b>[1 pt]</b> 
        Create a method called <tt>printLeadingSpaces</tt> that takes two
        integer parameters: the start of date of the week and the end of date
        of the week. Using these dates, this method will figure out for that
        week, how many days already has numeric dates filled in and how many
        days require filler whitespaces and displays them. This method does
        not return anything.
        <p>

        <b>[1 pt]</b> 
        Based on the input arguments, determine how many days require fillter
        whitespaces at the beginning of the week. Define a general formula
        that will work for other months as well. For example, in our case for
        March, the first week runs from 1 to 3. That means, there are 3 days
        that already have numeric dates to them, but 4 days without. So this
        method should first print 4 days of leading whitespaces, and then
        print the dates 1, 2, 3.
        <p>

        <b>[1 pt]</b> 
        Once you know how many days need filler whitespaces, use a loop to
        generate them. 
        <p>

        <b>[1 pt]</b> 
        Call <tt>printLeadingSpaces</tt> in your <tt>main</tt> method before
        you call <tt>printWeek</tt>. Once you get this working, you will have
        the calendar display properly for March 2018 (showing the same output
        as the original sample output above).
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
