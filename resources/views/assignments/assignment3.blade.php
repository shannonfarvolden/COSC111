@extends('app')

@section('content')
    <div class="jumbotron">
    <h2>Assignment 3 [33 pts]</h2>
    <p>Due: Sunday 9:00am on April 02nd</p>
    The purpose of this assignment is to give you practice with 2D arrays as
    well as classes and objects on your own without step-by-step guidelines.
    You will still have the option to discuss problems with others and search
    online for help, but please remember to cite all your sources and follow
    proper academic conduct.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>TicTacToe.java</tt>
      <li><tt>Order.java</tt>
      <li><tt>TestOrder.java</tt>
    </ul>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">1. Tic Tac Toe [16 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      In this question, you are given the following class definition and are
      asked to add new code to <tt>main</tt> and additional methods to it. 
      When you are done, you will be able to play tic taco toe with the
      computer. Download the following <a href=/documents/TicTacToe.java>template</a> to get started.
      
      <p>
      Specific requirements to complete this question are:
      <ul>
        <li> Run the downloaded program and make sure it works and prints an empty board.
        <p>

        <li> In the <tt>main</tt> method, ask the user which row and column
        s/he wants to select. Then put an 'o' in that spot and print out the
        updated board. If that spot is already taken, keep asking the user to
        enter a valid spot that is empty.
        <p>

        <li> Write a method called <tt>getCompRow</tt> that randomly generates
        a row for the computer's move, and a method called <tt>getCompCol</tt>
        that randomly generates a column for the computer's move. Make sure
        the spot is not already taken.
        In the <tt>main</tt> method, call those methods to get the row and
        column values. Then put an 'x' in that spot and print out the updated
        board.
        <p>

        <li> Structure your code in the <tt>main</tt> method so that the
        program keeps running to get the user's move and the computer's move
        until the board is full. Once the board is full, display that the
        result is a tie. 
        (Hint: you need one and only one loop inside <tt>main</tt>.)
        <p>

        <li> Create a method called <tt>winFound</tt> with the following
        header:
        <br>
        <tt>public static boolean winFound( char[][] gameBoard, char player)</tt>
        <br>
        This method checks to see if a specific player (represented by
        character 'o' or character 'x') has won the game by having three of
        its characters in a row.
        Inside the loop in the <tt>main</tt> method, call <tt>winFound</tt>
        once after you get the user's move and a second time after you get the
        computer's move.
        <p>

        <li> Note: you may want to write additional methods to help make the
        above steps work together nicely.
      </ul>

      Sample output:
      <pre>
-------
| | | |
-------
| | | |
-------
| | | |
-------
Which row? Specify top (T), middle (M), bottom (B).
M
Which col? Specify left (L), middle (M), right (R).
M
Your move: 
-------
| | | |
-------
| |o| |
-------
| | | |
-------
My move: 
-------
| | |x|
-------
| |o| |
-------
| | | |
-------
Which row? Specify top (T), middle (M), bottom (B).
M
Which col? Specify left (L), middle (M), right (R).
L
Your move: 
-------
| | |x|
-------
|o|o| |
-------
| | | |
-------
My move: 
-------
| | |x|
-------
|o|o|x|
-------
| | | |
-------
Which row? Specify top (T), middle (M), bottom (B).
B
Which col? Specify left (L), middle (M), right (R).
R
Your move: 
-------
| | |x|
-------
|o|o|x|
-------
| | |o|
-------
My move: 
-------
| |x|x|
-------
|o|o|x|
-------
| | |o|
-------
Which row? Specify top (T), middle (M), bottom (B).
T
Which col? Specify left (L), middle (M), right (R).
L
Your move: 
-------
|o|x|x|
-------
|o|o|x|
-------
| | |o|
-------
You win!
      </pre>

      <p>
      Be sure to write comments for each method to explain what they do.
      Also, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.

      <p>
      <b>Grading Scheme</b>:
      <ul>
        <li> <b>[2 pts]</b> Comments
        <li> <b>[3 pts]</b> Repeatedly get moves until board is full
        <li> <b>[1 pt]</b> There is a tie if the board is full and there's no winner
        <li> <b>[3 pts]</b> Getting user's row and column (making sure it's valid input) 
        <li> <b>[3 pts]</b> Generating computer's row and column (making sure it's valid input) 
        <li> <b>[1 pt]</b> Printing the board after each move 
        <li> <b>[2 pts]</b> Checking to see if a player gotten three of its
        characters in a row
        <li> <b>[1 pt]</b> Printing who wins in the correct situation
      </ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Restaurant Orders [17 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
	  In this question, you are to define your own class and to write a test
	  class for it.
	  This question simulates restuarant orders. You will create a
	  <tt>Order</tt> class that keeps track of orders from each table, and a
	  test class called <tt>TestOrder</tt> that runs the program.

      <p>
      Specific requirements:
      <ul>
        <li> In <tt>Order</tt>: There are 3 possible items that one can order:
		soup, dumplings, and sushi. Create attribute variables inside the
		class to represent how many of these items are requested in an order.
		Define a contructor method to initialize these attributes.

        <li> In <tt>Order</tt>: Define a method <tt>placeOrder</tt> that
		interacts with a user to ask which item from the menu s/he would like,
		and how many of each. When the order is complete, display back to the
		user what was ordered (you <b>must use</b> <tt>toString()</tt> to do this).

        <li> In <tt>Order</tt>: Define a <tt>toString()</tt> method that
		returns a <tt>String</tt> consisting of all the items ordered by the
		user.

        <li> In <tt>Order</tt>: Define a method called <tt>orderSoup</tt> that
		checks to see if the requested quantity is available in stock. You
		will want to use a <tt>static</tt> variable (e.g., called
		<tt>soupStock</tt>) to keep track of how much stock is available in
		the entire restaurant. If enough stock is available, create the order.
		If there's not enough available, tell the user how much is left, and
		ask the user to choose again.

        <li> In <tt>Order</tt>: Define a method called <tt>orderDumplings</tt> that
		checks to see if the requested quantity is available in stock. You
		will want to use a <tt>static</tt> variable (e.g., called
		<tt>dumplingsStock</tt>) to keep track of how much stock is available in
		the entire restaurant. If enough stock is available, create the order.
		If there's not enough available, tell the user how much is left, and
		ask the user to choose again.

        <li> In <tt>Order</tt>: Define a method called <tt>orderSushi</tt> that
		checks to see if the requested quantity is available in stock. You
		will want to use a <tt>static</tt> variable (e.g., called
		<tt>sushiStock</tt>) to keep track of how much stock is available in
		the entire restaurant. If enough stock is available, create the order.
		If there's not enough available, tell the user how much is left, and
		ask the user to choose again.

		<li> In <tt>TestOrder</tt>: create (at least) two <tt>Order</tt>
		objects. For each object, call its <tt>placeOrder()</tt> method. 
		
		<li> When you are done and you are testing your program, try different
		values to make sure you are able to place orders successfully. After
		that, try to place orders where you expect to not have enough items in
		stock and see what happens.

		<li> Note that you may be able to successfully create an order for
		table 1, but then run out of stock for soup, and table 2 won't be able
		to order soup because there's nothing left. This effect can only be
		achieved if your <tt>soupStock</tt> variable is defined as static.
		Likewise for dumplings and sushi.
      </ul>

      Sample output (my initial values for 
	  <tt>soupStock</tt> is 5,
	  <tt>dumplingsStock</tt> is 50, and
	  <tt>sushiStock</tt> is 10):
      <pre>
-------------------------------------------------
Hello Table 1
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
1
How many would you like?
5
Thank you, would you like something else?
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
25
Thank you, would you like something else?
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
3
How many would you like?
15
***** We have 10 piece(s) of sushi left.Please choose again. *****
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
0
You ordered the following:
5 soups
25 dumplings

-------------------------------------------------
Hello Table 2
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
3
How many would you like?
10
Thank you, would you like something else?
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
1
How many would you like?
2
***** We have 0 soup(s) left.Please choose again. *****
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
50
***** We have 25 dumpling(s) left.Please choose again. *****
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2 
How many would you like?
20
Thank you, would you like something else?
Here's our menu:
1. Soup
2. Dumplings
3. Sushi
What would you like to order? Select 1, 2, 3 (or 0 to exit)
0
You ordered the following:
20 dumplings
10 pieces of sushi
      </pre>

      <p>
      Be sure to write comments for each method to explain what they do.
      Also, be sure to write comments above your class to indicate the
      author of this file (you), acknowledgements for any external help you
      got, and what the purpose of this program is.

      <p>
      <b>Grading Scheme</b>:
      <ul>
        <li> <b>[2 pts]</b> Comments
		<li> <b>[2 pts]</b> TestOrder class: create two <tt>Order</tt> objects
		and call the <tt>placeOrder</tt> method for each object

		<li> <b>[2 pts]</b> Order class: keeping track of available soup,
		dumplings, sushi across <tt>Order</tt> objects
		and make sure their values are updated whenever orders are
		successfully placed

        <li> <b>[1 pt]</b> Order class: constructor method to initialize attributes
        <li> <b>[2 pts]</b> Order class: <tt>placeOrder</tt> interacts with
		user to get the order stored correctly
        <li> <b>[1 pt]</b> Order class: <tt>orderSoup</tt>
        <li> <b>[1 pt]</b> Order class: <tt>orderDumplings</tt>
        <li> <b>[1 pt]</b> Order class: <tt>orderSushi</tt>
        <li> <b>[1 pt]</b> Order class: confirmed order is displayed back to
		the user via call to <tt>toString</tt>

        <li> <b>[1 pt]</b> Order class: all attributes should be private
        <li> <b>[2 pts]</b> Order class: any necessary getters and setters
        <li> <b>[1 pt]</b> Order class: only methods that need to be called
		outside the class should be <tt>public</tt>
      </ul>
    </div>
  </div>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Assignments',
            page: '/assignments'
        });
    </script>
@endsection
