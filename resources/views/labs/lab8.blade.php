@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Lab 8 [27 pts]</h2>
    <p>Exercises with 2D Arrays and Array of Objects</p>
    The purpose of this lab is to give you hands on practice with 2D arrays.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>Simple2DMethods.java</tt>
      <li><tt>Textbook.java</tt>
      <li><tt>TestTextbook.java</tt>
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
      is, 10 rows and 50 columns. 
      Initialize the elements of this array with random numbers (of any
      range). In the sample output below, the range is between 0 up to 1000.

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

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Array of Objects [7 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      The purpose of this question is to get you to comfortable working with
      1D arrays, but using objects (even though you haven't worked with
      objects before). 
      First, create a project called <tt>Textbook</tt>. In this project,
      download 
      <a href=Textbook.java>Textbook.java</a> and
      <a href=TestTextbook.java>TestTextbook.java</a>. 
      Make sure <b>both</b> files are added to the same project.

      <p>
      <b>[description only]</b>
      You will not be modifying the <tt>Textbook</tt> class. However, note
      that this is a class that lets you create various <tt>Textbook</tt>
      objects. Even if you are not sure what that means, you can think of it
      like the <tt>String</tt> class that lets us define a bunch of
      <tt>String</tt> objects. 

      <p>
      <b>[description only]</b>
      Now, take a look at the <tt>TestTextbook</tt> class. It has a
      <tt>main</tt> method. In it, three books are defined (called
      <tt>ai</tt>, <tt>java</tt>, and <tt>alg</tt>). Try running this program
      -- nothing should happen (be sure you can run it and there are no
      errors).

      <p>
      <b>[1 pt]</b> 
      Inside the <tt>main</tt> method, create an array of <tt>Textbook</tt>
      objects. Note that the way you create an array of objects follows the
      same syntax as any other array declaration: <br>
      <tt>DATA_TYPE[] VARIABLE_NAME = new DATA_TYPE[ NUMBER_TO_CREATE ]</tt>.

      <p>
      <b>[1 pt]</b> 
      Store into this array the 3 <tt>Textbook</tt> objects that were defined
      at the beginning of the method. 

      <p>
      <b>[1 pt]</b> 
      Write a loop that iterates through the array elements, calls the
      object's <tt>toString()</tt> method, and prints out the returned
      strings. For example, if your array is called <tt>books</tt> and your
      loop counter variable is called <tt>i</tt>, then to call the object's
      method, you'd write: <br>
      <tt>books[i].toString()</tt><br>
      which returns a <tt>String</tt> for you to display.

      <p>
      <b>[1 pt]</b> 
      Next, write another loop that executes the following statement for each
      array element:<br>
      <tt>books[i].setSubject( "Computer Science" )</tt><br>
      Again, assuming your array is called <tt>books</tt> and your loop
      counter variable is called <tt>i</tt>. 
      When you printed the <tt>Textbook</tt> objects earlier, one of the
      attributes (<tt>subject</tt>) was defined to be "unknown". Here, we are
      setting that attribute to be "Computer Science", so when we display the
      objects again, we can see that changed.

      <p>
      <b>[1 pt]</b> 
      Finally, write a loop that displays each array object just like the
      first loop you wrote earlier.

      <p>
      Sample output:
      <pre>
*** Before changes:
Subject: unknown
Title:   Artificial Intelligence: A Modern Approach
Author: Stuart Russell and Peter Norvig
Year:   2009

Subject: unknown
Title:   Introduction to Java Programming
Author: Y. Daniel Liang
Year:   2015

Subject: unknown
Title:   Introduction to Algorithms
Author: T.H. Cormen, C.E. Leiserson, R.L. Rivest, and C. Stein
Year:   2009

*** After changes:
Subject: Computer Science
Title:   Artificial Intelligence: A Modern Approach
Author: Stuart Russell and Peter Norvig
Year:   2009

Subject: Computer Science
Title:   Introduction to Java Programming
Author: Y. Daniel Liang
Year:   2015

Subject: Computer Science
Title:   Introduction to Algorithms
Author: T.H. Cormen, C.E. Leiserson, R.L. Rivest, and C. Stein
Year:   2009
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
