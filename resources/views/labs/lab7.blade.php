@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 7 [24 pts]</h2>
        <p>Working with Arrays</p>
        The purpose of this lab is to give you hands on practice with arrays, from
        declaring them, initializing them, passing them as arguments, as well as
        reading from and writing to them.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li><tt>Part1.txt</tt>
            <li><tt>ArrayHistogram.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Short Exercises [10 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                This exercise gets you to do a series of short exercises pertaining to
                arrays.
                The answers for this part of the lab will need to be typed up and saved
                into a text document called <tt>Part1.txt</tt>.

            <ol>
                <li><b>[1 pt]</b>
                    Declare an array that stores 100 exam scores.
                <li><b>[1 pt]</b>
                    Declare an array that stores 500 student names.
                <li><b>[2pts: 1 pt for array declaration, 1 pt for using
                        <tt>random</tt> properly]</b>
                    Declare an array that stores a random number between 50 and 350 characters.
                <li><b>[1 pt]</b>
                    Given an array called <tt>num</tt>, assign its second element to -5.
                <li><b>[1 pt]</b>
                    Given an array called <tt>num</tt>, assign its last element to -5.
                <li><b>[4 pts: 1 pt method header and return statement, 1 pt for loop, 1 pt for correct index, 1 pt
                        for break]</b>
                    Create a method that takes an array of doubles called <tt>values</tt> as
                    input, and returns the index of the first element whose number is
                    greater than 5. If no such element exists, return -1.
            </ol>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Visualizing a Histogram [14 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to generate some random numbers and visualize
                the frequency of those numbers as a histogram.
                First, create a program called <tt>ArrayHistogram</tt>.

            <p>
                <b>[1 pt]</b>
                In your program, define an integer array called <tt>numbers</tt> that
                holds 100 numbers. Separately, define an integer array called
                <tt>frequencies</tt> that holds the numbers 0, 1, 2, ..., up to and
                including 9.

            <p>
                <b>[2 pts]</b>
                Create a method called <tt>initArray</tt> that initializes all the
                elements in <tt>numbers</tt> to be a random integer between 0 and 9
                (inclusive).
                Call this method inside <tt>main</tt>. You can print out the elements of
                your array to ensure everything is working properly before moving on.

            <p>
                <b>[2 pts]</b>
                Remember that <tt>numbers</tt> is an array that stores a number between
                0 to 9. What we want to do is count the number of times each of those
                digits appear in the <tt>numbers</tt> array and store that in
                <tt>frequencies</tt>.  For example, if the digit 0 shows up 12 times,
                then the value of <tt>frequencies[0]</tt> is 12.
                Create a method called <tt>createHistogram</tt> that loops through each
                element in <tt>numbers</tt> and stores those occurrences in
                <tt>frequencies</tt>.

            <p>
                <b>[1 pt]</b>
                Call <tt>createHistogram</tt> inside <tt>main</tt> and make sure
                everything works properly.

            <p>
                <b>[1 pt]</b>
                Define a third method called <tt>prString</tt> that concatenates all the
                information that needs to be printed into a single <tt>String</tt>
                variable and returns that <tt>String</tt> as output.

            <p>
                <b>[2 pts]</b>
                The purpose of <tt>prString</tt> is two-folds. First, you will get it to
                display all the values inside the array <tt>numbers</tt>. You wil need
                to concatenate these numbers into a <tt>String</tt> variable. These
                numbers should be comma separated, and should have 20 numbers on each
                line. The last number in the array will not have a following comma. See
                sample output below for an example.

            <p>
                <b>[2 pts]</b>
                Second, <tt>prString</tt> will concatenate a series of stars ("*") for
                the <tt>frequencies</tt> array so that the output looks like a sideways
                bargraph. For example, if <tt>frequencies[5]</tt> is 6, then the line
                corresponding to that is "5: ******". See sample output below for an
                example. Call this method inside <tt>main</tt> when you are done.

            <p>
                <b>[1 pt]</b>
                Note that since <tt>prString</tt> returns a single <tt>String</tt> that
                stores all the information to be printed together into one variable,
                there will be <b>no print statements</b> inside this method.
                In fact, in the entire program, all you need is one <tt>println</tt>
                statement inside <tt>main</tt> to have it work.

            <p>
                Sample output:
      <pre>
The randomly generated numbers are:
6, 8, 5, 3, 2, 5, 7, 5, 6, 9, 3, 0, 6, 2, 6, 3, 4, 3, 8, 6,
3, 3, 6, 0, 6, 5, 6, 1, 7, 3, 3, 6, 4, 1, 6, 1, 0, 7, 7, 2,
2, 6, 5, 1, 1, 8, 4, 4, 6, 4, 4, 1, 6, 5, 3, 6, 8, 5, 9, 4,
5, 9, 1, 9, 8, 6, 0, 7, 4, 3, 2, 5, 2, 6, 1, 8, 5, 8, 4, 3,
3, 6, 8, 4, 2, 6, 9, 7, 6, 3, 7, 7, 2, 8, 5, 0, 9, 9, 2, 4

The histogram looks like:
0: *****
1: ********
2: *********
3: *************
4: ***********
5: ***********
6: *******************
7: ********
8: *********
9: *******
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>
@endsection