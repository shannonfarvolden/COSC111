@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 3 [32 pts]</h2>
        <p>Due: Friday 2:00pm on April 08th</p>
        The purpose of this assignment is to give you practice with classes and
        objects on your own without step-by-step guidelines. You will still have
        the option to discuss problems with others and search online for help, but
        please remember to cite all your sources and follow proper academic
        conduct.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li><tt>Point.java</tt>
            <li><tt>TestPoint.java</tt>
            <li><tt>Song.java</tt>
            <li><tt>TestSong.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Geometric Points [17 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                In this question, you are given the following class definition and are
                asked to add new methods to it, as well as to write a test class for it.
                The specific requirements are stated below.

            <p>
                Below is the class definition for <tt>Point</tt>:
      <pre>
public class Point
{
  private int x;
  private int y;

  // constructor
  public Point( int x0, int y0 )
  {
    x = x0;
    y = y0;
  }

  // shifts the point by the specified amount
  public void translate( int dx, int dy )
  {
    x = x + dx;
    y = y + dy;
  }

  // calculates this point's distance from (0,0) via pythagorus theorem
  public double distanceFromOrigin()
  {
    double dist = Math.sqrt( x*x + y*y );
    return dist;
  }
}
      </pre>
            <p>
                Specific requirements:
            <ul>
                <li> In a separate file, create a class called <tt>TestPoint</tt> with
                    a <tt>main</tt> method in it.
                <li> In the <tt>main</tt> method, create a point at (17,9) -- that is,
                    a point whose x value is 17 and whose y value is 9. Create a second
                    point at (4,-1).
                <li> In the <tt>Point</tt> class, define a new method with the
                    following header:<br>
                    <tt>public String toString()</tt>
                    that concatenates the point's x and y values into a format of "(x,y)".
                    See sample output below for reference.

                <li> In the <tt>main</tt> method, call <tt>toString</tt> for each
                    point you've created.

                <li> In the <tt>main</tt> method, call <tt>translate</tt> for the
                    first point and then display where that point got moved to. Likewise,
                    call <tt>distanceFromOrigin</tt> for the first point and then display
                    the distance calculated.

                <li> In the <tt>Point</tt> class, define new methods with the
                    following headers: <br>
                    <tt>public int getX()</tt><br>
                    <tt>public int getY()</tt><br>
                    <tt>public double distanceTo( Point b )</tt><br>
                    where <tt>getX</tt> returns the x value of the point,
                    <tt>getY</tt> returns the y value of the point, and
                    <tt>distanceTo</tt> returns the distance between this point and point
                    <tt>b</tt> that has been passed into the method. The calculation for
                    <tt>distanceTo</tt> will be similar to the Pythagorus formula used in
                    <tt>distanceFromOrigin</tt>.

                <li> In the <tt>main</tt> method of the <tt>TestPoint</tt> class,
                    call <tt>distanceTo</tt> to find out the distance between your two
                    points and display it.
            </ul>

            Sample output:
      <pre>
Point 1 is: (17,9)
Point 2 is: (4,-1)
Point 1 is: (20,10)
Point 1 is 22.360679774997898 away from (0,0)
Point 1 is 19.4164878389476 away from Point 2
      </pre>

            <p>
                Be sure to write comments above your class to indicate the
                author of this file (you), acknowledgements for any external help you
                got, and what the purpose of this program is.

            <p>
                <b>Grading Scheme</b>:
            <ul>
                <li> <b>[2 pts]</b> Comments
                <li> <b>[1 pt]</b> TestPoint class: create two points
                <li> <b>[1 pt]</b> TestPoint class: display two points
                <li> <b>[2 pts]</b> TestPoint class: call <tt>translate</tt> and display point
                <li> <b>[2 pts]</b> TestPoint class: call <tt>distanceFromOrigin</tt> and display result
                <li> <b>[2 pts]</b> TestPoint class: call <tt>distanceTo</tt> and display result
                <li> <b>[2 pts]</b> Point class: <tt>toString</tt>
                <li> <b>[2 pts]</b> Point class: accessor methods
                <li> <b>[3 pts]</b> Point class: <tt>distanceTo</tt>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Songs in a CD [15 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                In this question, you will write your own classes. The specific
                requirements are:
            <ul>
                <li> Create a class called <tt>Song</tt> that models songs in the real
                    world. A song has an artist, a title, and 5-star rating. Your class
                    will have attributes that store this information.

                <li> In the <tt>Song</tt> class, define a constructor with the
                    following header:<br>
                    <tt>public Song( String artist, String title )</tt><br>
                    so that you initialize the attributes to the arguments that are passed
                    into the constructor. Any other attributes will need to be assigned a
                    default value (e.g., <tt>myRating = 0</tt>).

                <li> In the <tt>Song</tt> class, define two accessor methods with the
                    following headers:<br>
                    <tt>public String getArtist()</tt><br>
                    <tt>public String getTitle()</tt><br>
                    that return the value of the corresponding attribute indicated by the
                    name of the method.

                <li> In the <tt>Song</tt> class, define a mutator method with the
                    following header:<br>
                    <tt>public void setRating( double rating )</tt><br>
                    that sets the value of the rating attribute to the argument passed
                    into the method.

                <li> In the <tt>Song</tt> class, define a method with the
                    following header:<br>
                    <tt>public String toString()</tt><br>
                    that concatenates all the song's information into a string and returns
                    the string.

                <li> In a separate file, create a class called <tt>TestSong</tt> with a
                    <tt>main</tt> method in it.
                <li> In the <tt>main</tt> method, create 5 song objects. After that,
                    change their ratings so some songs are good and some are bad.
                <li> In the <tt>main</tt> method, create an array of 5 songs called
                    <tt>cd</tt>. Initialize each element of this array with the
                    <tt>Song</tt> objects you just created.
                    (Hint: follow the <tt>Book</tt> example from the lectures.)
                <li> In the <tt>main</tt> method, loop through the array and display
                    the songs in the array by calling the <tt>toString</tt> method of each
                    <tt>Song</tt> object in the array.
            </ul>

            <p>
                Lastly, be sure to write comments above your class to indicate the
                author of this file (you), acknowledgements for any external help you
                got, and what the purpose of this program is.

            <p>
                <b>Grading Scheme</b>:
            <ul>
                <li> <b>[2 pts]</b> Comments
                <li> <b>[2 pts]</b> Song class: attributes
                <li> <b>[2 pts]</b> Song class: constructor method
                <li> <b>[2 pts]</b> Song class: accessor methods
                <li> <b>[1 pt]</b> Song class: mutator method
                <li> <b>[1 pt]</b> Song class: <tt>toString</tt> method
                <li> <b>[1 pt]</b> TestSong class: create songs
                <li> <b>[1 pt]</b> TestSong class: change ratings
                <li> <b>[1 pt]</b> TestSong class: create new CD array
                <li> <b>[1 pt]</b> TestSong class: initialize array elements
                <li> <b>[1 pt]</b> TestSong class: display array elements
            </ul>
        </div>
    </div>
@endsection