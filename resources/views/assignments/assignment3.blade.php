@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 3 [35 pts]</h2>
        <p>Due: Sunday 9:00am on April 01st</p>
        The purpose of this assignment is to give you practice with 2D arrays
        as well as classes and objects on your own without step-by-step
        guidelines. You will still have the option to discuss problems with
        others and search online for help, but please remember to cite all
        your sources and follow proper academic conduct.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Memory.java 
            <li>Inventory.java
            <li>TestInventory.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Memory [17 pts]</h3>
        </div>
        <div class="panel-body">
        Remember the "Memory" card game? The idea is that you have a bunch of
        cards faced down. It's typically played with two players. When it's
        your turn, you flip any two cards you want. If the two cards show the
        same object on it, then you collect them in your pile and you get to
        take another turn. When all the cards have been flipped, the player
        with the most collected cards wins.
        <p>

        In this program, we will simplify the game to a single player game.
        There will be a 4x4 layout of cards (so a total of 16 cards) which you
        will randomly generate based on 8 special characters. Once you've
        generated the cards facing down, you let the user take a turn until
        all pairs of cards have been found.
        <p>

        Sample output (". . ." means some output has been removed to save
        space):
        <pre>
----------------START----------------
Remaining cards from the game: 
   1 2 3 4 
1  x x x x 
2  x x x x 
3  x x x x 
4  x x x x 
First card is (specify row,column): 
1
1
   1 2 3 4 
1  $ x x x 
2  x x x x 
3  x x x x 
4  x x x x 
Second card is (specify row,column): 
1
2
   1 2 3 4 
1  $ ? x x 
2  x x x x 
3  x x x x 
4  x x x x 
-------------------------------------
Remaining cards from the game: 
   1 2 3 4 
1  x x x x 
2  x x x x 
3  x x x x 
4  x x x x 
First card is (specify row,column): 
1
3
   1 2 3 4 
1  x x % x 
2  x x x x 
3  x x x x 
4  x x x x 
Second card is (specify row,column): 
1
4
   1 2 3 4 
1  x x % ? 
2  x x x x 
3  x x x x 
4  x x x x 
-------------------------------------
Remaining cards from the game: 
   1 2 3 4 
1  x x x x 
2  x x x x 
3  x x x x 
4  x x x x 
First card is (specify row,column): 
1
2
   1 2 3 4 
1  x ? x x 
2  x x x x 
3  x x x x 
4  x x x x 
Second card is (specify row,column): 
1
4
   1 2 3 4 
1  x ? x ? 
2  x x x x 
3  x x x x 
4  x x x x 
You found a match!
-------------------------------------
Remaining cards from the game: 
   1 2 3 4 
1  x   x   
2  x x x x 
3  x x x x 
4  x x x x 
First card is (specify row,column): 
1
1
   1 2 3 4 
1  $   x   
2  x x x x 
3  x x x x 
4  x x x x 
Second card is (specify row,column): 
3
4
   1 2 3 4 
1  $   x   
2  x x x x 
3  x x x $ 
4  x x x x 
You found a match!
-------------------------------------
Remaining cards from the game: 
   1 2 3 4 
1      x   
2  x x x x 
3  x x x   
4  x x x x 
. 
.
.
-------------------------------------
Remaining cards from the game: 
   1 2 3 4 
1          
2          
3      x   
4  x       
First card is (specify row,column): 
4
1
   1 2 3 4 
1          
2          
3      x   
4  *       
Second card is (specify row,column): 
3
3
   1 2 3 4 
1          
2          
3      *   
4  *       
You found a match!
-------------------------------------
        </pre>

        Specific requirements to complete this question are:
        <ul>
        <li> Define a character array with 8 possible special characters that
        can appear on the cards
        <li> Define a constant <tt>MAX</tt> with a value of 4 to represent
        that the cards will be presented in a 4x4 layout

        <li> Generate a random configuration of the cards in the 4x4 layout
        using the 8 special characters. Each character must appear twice in
        the layout. You will want to store this in a 2D array of characters.

        <li> Define a 2D array of booleans that keeps track of which cards
        have been matched and collected by the player already.

        <li> Repeatedly ask the user to select a pair of cards until all cards
        have been collected. In each one of these turns, the user can flip two
        cards by specifying the row and column of the card to be flipped.
        After each card has been specified, show what that card is facing up
        (leaving all other cards facing down). 

        <li> In each turn, after the user specifies two cards to flip, check
        if the characters of the two cards match. If a match is found, let the
        user know, keep track of those cards, so that they do not get
        displayed again.

        <li> When you display which cards are left in the game, all the
        unmatched cards will need to be displayed. If a card is facing down,
        display an "x". If a card is facing up, display the special character
        that it was initialized with. If a card has been matched and collected
        by the user, then don't display anything in that spot (just a space
        will do the trick).

        <li> Rather than writing everything inside your <tt>main</tt> method,
        ensure you define a method called <tt>showBoard</tt> with the
        following header: <br>
        <tt>public static void showBoard( char[][] cards, boolean[][] matched )</tt><br>
        This method takes the set of <tt>cards</tt> and displays an "x" if a
        specific card is faced down. However, if a card has been matched
        (based on the boolean 2D array called <tt>matched</tt>), then the
        method will display a space instead.

        <li> Also, define a method called <tt>openCard</tt> with the following
        header: <br>
        <tt>public static void openCard( char[][] cards, boolean[][] matched, 
              int r1, int c1, int r2, int c2 ) </tt><br>
        This method displays which cards the user selected in a turn, so the
        user can see what characters are behind which card and whether a match
        exists in the two cards. The integer parameters <tt>r1</tt> and
        <tt>c1</tt> represent the row and column number of the first card the
        user selected, while <tt>r2</tt> and <tt>c2</tt> represent the row and
        column number of the second card selected.

        </ul>
        
        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
  
        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[1 pt]</b> Defining the required constant, array, and 2D
          arrays as mentioned above

          <li> <b>[3 pts]</b> Generates a random configuration of character
          cards in a 4x4 layout

          <li> <b>[3 pts]</b> Method <tt>showBoard</tt> that displays the
          remaining faced down cards after a turn (see sample output)

          <li> <b>[1 pt]</b> Asking the user to enter one card at a time that
          s/he wants to flip over

          <li> <b>[3 pts]</b> Method <tt>openCard</tt> that displays the one
          or two cards selected by the user in each turn, with the other cards
          showing faced down

          <li> <b>[1 pt]</b> Checking to see if the selected pair of cards
          have matching characters

          <li> <b>[2 pts]</b> Keeping track of all matches found

          <li> <b>[1 pt]</b> Ending the game when all possible matches have
          been found
        </ul>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Managing Toy Inventory [18 pts]</h3>
        </div>
        <div class="panel-body">
        In this question, you are to define your own class and to write a test
        class for it. This question simulates inventory management from
        multiple toy stores. You will create an <tt>Inventory</tt> class that
        keeps track of orders from each toy store, and a test class called
        <tt>TestInventory</tt> that runs the program.
        <p>

        Specific requirements:
        <ul>
        <li> In <tt>Inventory</tt>: There are 3 possible toys that one can
        order: batman costumes, spiderman masks, and superman figurines.
        Create attribute variables inside the class to represent how many of
        these items are requested in an order. Define a contructor method to
        initialize these attributes. 
        <li> In <tt>Inventory</tt>: Your constructor will also take a location
        as the name of the toy store making the order. (See sample output
        below.)

        <li> In <tt>Inventory</tt>: Define a method <tt>placeOrder</tt> that
        interacts with a user to ask which items from the menu s/he would
        like, and how many of each. When the order is complete, display back
        to the user what was ordered (you <b>must use</b> the
        <tt>toString</tt> method to do this).

        <li> In <tt>Inventory</tt>: Define a <tt>toString</tt> method that
        returns a String consisting of all the items ordered by the user. Note
        that if only 1 item of a toy is ordered, you will output that
        description in singular form, and if more than 1 item is ordered, then
        the description will be in plural form.

        <li> In <tt>Inventory</tt>: Define a method called
        <tt>orderBatman</tt> that checks to see if the requested quantity is
        available in stock. You will want to use a static variable (e.g.,
        called <tt>batmanStock</tt>) to keep track of how much stock is
        available in the entire inventory. If enough stock is available,
        create the order. If there's not enough available, tell the user how
        much is left, and ask the user to choose again.

        <li> In <tt>Inventory</tt>: Define a method called
        <tt>orderSpiderman</tt> that checks to see if the requested quantity
        is available in stock. This method works just like
        <tt>orderBatman</tt>. There is also a static variable that keeps track
        of all the spiderman masks in the entire inventory (e.g., called
        <tt>spidermanStock</tt>).

        <li> In <tt>Inventory</tt>: Define a method called
        <tt>orderSuperman</tt> that checks to see if the requested quantity
        is available in stock. This method works just like
        <tt>orderBatman</tt>. There is also a static variable that keeps track
        of all the superman figurines in the entire inventory (e.g., called
        <tt>supermanStock</tt>).

        <li> In <tt>TestInventory</tt>: create (at least) two
        <tt>Inventory</tt> objects. For each object, call its
        <tt>placeOrder</tt> method.

        <li> When you are done and you are testing your program, try different
        values to make sure you are able to place orders successfully. After
        that, try to place orders where you expect to not have enough items in
        stock and see what happens.

        <li> Note that you may be able to successfully create an order for
        store 1, but then run out of stock for batman, and store 2 won't be
        able to order batman because there's nothing left. This effect can
        only be achieved if your <tt>batmanStock</tt> variable is defined as
        static in the <tt>Inventory</tt> class. Likewise for spiderman and
        superman.
        </ul>
        <p>

        Sample output (my initial values for the toy stocks are 90 for batman
        costumes, 50 for spiderman masks, and 45 for superman figurines):
        <pre>
-------------------------------------------------
Hello Kelowna Toy Store
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
1
How many would you like?
20
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
3
How many would you like?
1
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
90
***** We have 50 spiderman mask(s) left. Please choose again. *****
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
40
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
0
You ordered the following:
20 batman costumes
40 spiderman masks
1 superman figurine

-------------------------------------------------
Hello Vernon Toy Store
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
1
How many would you like?
90
***** We have 70 batman costume(s) left. Please choose again. *****
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
1 
How many would you like?
60
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
25
***** We have 10 spiderman mask(s) left. Please choose again. *****
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
2
How many would you like?
10
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
3
How many would you like?
15
Thank you, would you like something else?
Here's what's in our inventory:
1. Batman Costumes
2. Spiderman Masks
3. Superman Figurines
What would you like to order? Select 1, 2, 3 (or 0 to exit)
0
You ordered the following:
60 batman costumes
10 spiderman masks
15 superman figurines
        </pre>

        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
  
        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[2 pts]</b> TestInventory class: create two
          <tt>Inventory</tt> objects and call their <tt>getName</tt> and
          <tt>placeOrder</tt> methods

          <li> <b>[2 pts]</b> Inventory class: keeping track of available
          batman, spiderman, and superman toys across <tt>Inventory</tt>
          objects and make sure their values are updated whenever orders are
          successfully placed

          <li> <b>[1 pt]</b> Inventory class: constructor method to initialize
          attributes
          <li> <b>[1 pt]</b> Inventory class: <tt>getName</tt> for getting the
          store's name
          <li> <b>[2 pts]</b> Inventory class: <tt>placeOrder</tt> interacts
          with user to get the order stored correctly
          <li> <b>[1 pt]</b> Inventory class: <tt>orderBatman</tt>
          <li> <b>[1 pt]</b> Inventory class: <tt>orderSpiderman</tt>
          <li> <b>[1 pt]</b> Inventory class: <tt>orderSuperman</tt>
          <li> <b>[1 pt]</b> Inventory class: confirmed order is displayed
          back to the user via call to <tt>toString</tt>
          <li> <b>[1 pt]</b> Inventory class: all attributes should be private
          <li> <b>[2 pts]</b> Inventory class: any additional necessary
          getters, setters, or helper methods for your program
          <li> <b>[1 pt]</b> only methods that need to be called outside the
          class should be <tt>public</tt>
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
