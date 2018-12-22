@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 8 [23 pts]</h2>
        <p>More on Arrays and 2D Arrays</p>
        The purpose of this lab is to give you more practice with arrays, and
        experience working with 2D arrays. If you need clarification with any
        of the steps below, ask your TA and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Matrix.java 
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Matrix Operations [23 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to generate create some basic 1D and 2D matrix
        operations. (A 1D array is equivalently called a vector.)
        First, create a program called <tt>Matrix</tt>.
        <p>
        
        <b>[2 pts: 1 pt for header, 1 pt for body]</b> 
        Define a method called <tt>mkVector</tt> that takes a specific size as
        input, generates a vector with random integers between 0 and 1000, and
        returns that vector as output. 
        <p>
       
        <b>[2 pts: 1 pt for header, 1 pt for body]</b> 
        As well, define another method called <tt>prVector</tt> that takes a
        vector as input and displays all the elements in that vector. (Does
        this method need to return anything?)
        <p>
       
        <b>[2 pts]</b> 
        In the <tt>main</tt> method, create two vectors named <tt>vec1</tt>
        and <tt>vec2</tt> by calling <tt>mkVector</tt> method that you just
        created. After that, call <tt>prVector</tt> with each of <tt>vec1</tt>
        and <tt>vec2</tt> to see what values are in them.
        <p>
       
        Sample output (so far):
        <pre>
vec1: 
272 736 516 815 286 215 840 808 912 59 607 429 

vec2: 
804 659 879 310 275 311 177 495 455 118 103 141 776 70 513 769 
        </pre>
        Here, <tt>vec1</tt> was created with 12 elements and 
        <tt>vec2</tt> was created with 16 elements.
       
        <b>[4 pts: 1 pt for header, 1 pt for input validation and return
        statement, 2 pts for generating random elements]</b> 
        Next, we are going to work on 2D arrays. First, define a method called
        <tt>magic</tt> that takes N as an input parameter, creates an N-by-N
        matrix with random elements between 1 and N^2 (this text notation
        reads as "N squared"), and returns that matrix as output. Note that N
        must be a positive number, otherwise the method will return
        <tt>null</tt>.
        <p>
       
        <b>[3 pts: 1 pt for header, 2 pts for method body]</b> 
        Define another method called <tt>prMatrix</tt> that takes a 2D array
        as input and displays all the elements in that array. (Does this
        method need to return anything?) Ensure that the array elements are
        displayed with proper alignment (see sample output below).
        <p>
       
        <b>[1 pt]</b> 
        In the <tt>main</tt> method, create a 2D array called <tt>mat1</tt>
        by calling <tt>magic</tt>, then printing that array that was created
        by calling <tt>prMatrix</tt>.
        <p>

        Sample output:
        <pre>
vec1: 
316 260 234 746 185 735 498 600 875 451 264 20 

vec2: 
267 973 984 239 310 682 877 144 596 792 778 680 684 928 494 337 

mat1: 
2 7 8 
7 9 1 
3 6 9 
        </pre>
        Here, <tt>mat1</tt> was created with N = 3. 
        <p>

        Note that since <tt>magic</tt> returns <tt>null</tt> when the input
        size is non-positive, if you tried to print the matrix that was
        created with it, it will return a null pointer error at runtime.
        <p>
       
        <b>[4 pts: 1 pt for header, 1 pt for size validation, 2 pts for copying elements]</b> 
        The last part of this exercise is to create a method called
        <tt>reshape</tt> that takes a 1D array, integer N, and integer M as
        inputs, creates a 2D array of size N-by-M with the elements that were
        found in the 1D array, and returns that 2D array. To do this properly,
        you must first verify that the number of elements in the 1D array is
        indeed N*M. If not, return <tt>null</tt>. If the sizes match up, then
        copy each element from the 1D array over into the 2D array.
        <p>
       
        Assuming you had <tt>vec1</tt> (size 1-by-12) and <tt>vec2</tt> (size
        1-by-16) created properly in the <tt>main</tt> method earlier, you can
        now use them here to test the <tt>reshape</tt> method.
        <p>
       
        <b>[2 pts]</b>
        To test the <tt>reshape</tt> method, call it inside the <tt>main</tt>
        method. Specifically, create a matrix called <tt>mat2</tt> by calling
        <tt>reshape</tt> with <tt>vec1</tt>, 6, and 2. Then call
        <tt>prMatrix</tt> to see the elements of <tt>mat2</tt>.
        <p>

        <b>[2 pts]</b>
        Likewise, create another matrix called <tt>mat3</tt> by calling
        <tt>reshape</tt> with <tt>vec2</tt>, 4, and 4. Then call
        <tt>prMatrix</tt> to see the elements of <tt>mat3</tt>.
        <p>

        Sample output:
        <pre>
vec1: 
332 889 191 873 503 477 625 545 213 230 658 399 

vec2: 
291 30 341 448 584 936 420 927 167 949 38 727 509 846 502 196 

mat1: 
6 7 5 
2 7 2 
1 8 5 

mat2: 
332 889 
191 873 
503 477 
625 545 
213 230 
658 399 

mat3: 
291 30 341 448 
584 936 420 927 
167 949 38 727 
509 846 502 196 
        </pre>

        Note that since <tt>reshape</tt> returns <tt>null</tt> when the input
        sizes don't match up, if you tried to print the matrix that was
        created with it, it will return a null pointer error at runtime.
        <p>
       
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
