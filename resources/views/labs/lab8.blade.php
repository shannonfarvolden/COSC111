@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 8 [20 pts]</h2>
        <p>Exercises with 2D Arrays</p>
        The purpose of this lab is to give you hands on practice with 2D arrays.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li><tt>Simple2DMethods.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Short Exercises [20 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This question consists of a series of short exercises that gets you to
                code with 2D arrays using methods.
                First, create a program called <tt>Simple2DMethods</tt>.

            <p>
                <b>[1 pt]</b>
                In the <tt>main</tt> method of your program, define a variable called
                <tt>myArray</tt>, which is a 2D array of integers of size 10 x 50. That
                is, 10 rows and 50 columns. Initialize the elements of this array with
                random numbers.

            <p>
                <b>[1 pt]</b>
                After you've initialized <tt>myArray</tt>, include the following lines
                inside the <tt>main</tt> method:

      <pre>
      System.out.print( "1. The largest value of this array is " );
      System.out.println( max( myArray ) );

      int i = 6;
      System.out.print( "2. The sum of the " + i + "th row is " );
      System.out.println( rowSum( myArray, i-1 ) );

      i = 3;
      System.out.print( "3. The sum of the " + i + "th column is " );
      System.out.println( columnSum( myArray, i-1 ) );

      System.out.println( "4. The sum of each of the rows in the array are: " );
      int[] sums = allRowSums( myArray );
      for( int j=0; j&lt;sums.length; j++ )
        System.out.println( sums[j] );

      System.out.print( "5. This array has magic rows: " );
      System.out.println( isRowMagic( myArray ) );
      </pre>

            <p>
                At this point, Eclipse will complain to indicate that those methods have
                not yet been defined.
                In the rest of this lab, you will be defining the methods that are
                called inside <tt>main</tt>.

            <ol>
                <li><b>[3 pts: 1 pt for nested loop, 1 pt for conditional, 1 pt for max]</b>
                    Write a method with the following header:<br>
                    <tt>public static int max( int[][] array )</tt><br>
                    that returns the maximum value in the input parameter called <tt>array</tt>.

                <li><b>[3 pts: 1 pt for get row, 1 pt for loop, 1 pt sum]</b>
                    Write a method with the following header:<br>
                    <tt>public static int rowSum( int[][] array, int i )</tt><br>
                    that returns the sum of the elements in the i'th row of <tt>array</tt>.

                <li><b>[3 pts: 1 pt for get column, 1 pt for loop, 1 pt sum]</b>
                    Write a method with the following header:<br>
                    <tt>public static int columnSum( int[][] array, int i )</tt><br>
                    that returns the sum of the elements in the i'th column of <tt>array</tt>.

                <li><b>[3 pts: 1 pt for calling rowSum, 1 pt for loop, 1 pt for return
                        value]</b>
                    Write a method with the following header:<br>
                    <tt>public static int[] allRowSums( int[][] array )</tt><br>
                    that calculates the sum of every row and stores them in an array to be
                    returned. In particular, index i of the return array stores the sum of
                    the elements in the i'th row of <tt>array</tt>.
                    Since you defined the method <tt>rowSum</tt> above, you will want to
                    call that method inside <tt>allRowSums</tt> so you don't have to
                    duplicate code.

                <li><b>[4 pts: 1 pt for calling allRowSum, 1 pt for loop, 1 pt for
                        conditional, 1 pt for return value]</b>
                    Write a method with the following header:<br>
                    <tt>public static boolean isRowMagic( int[][] array )</tt><br>
                    that checks if every row of <tt>array</tt> has the same row sum.
                    Since you defined the method <tt>allRowSums</tt> in the previous
                    question, you will want to call that method inside <tt>isRowMagic</tt>
                    so you don't have to duplicate code.

            </ol>

            <p>
                Sample output:
      <pre>
1. The largest value of this array is 999
2. The sum of the 6th row is 20819
3. The sum of the 3th column is 5340
4. The sum of each of the rows in the array are:
25616
24877
24864
22972
22986
20819
28661
24575
25698
26272
5. This array has magic rows: false
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