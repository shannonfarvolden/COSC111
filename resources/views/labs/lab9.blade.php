@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Lab 9 [29 pts + 2 bonus]</h2>
    <p>Working with Classes and Objects</p>
    The purpose of this lab is to give you hands on practice with building
    classes and objects.
    If you need clarification with any of the steps below, ask your TA and/or
    your neighbour.
    <p> </p>
    <b>What to Submit:</b>
    <ul>
      <li><tt>Animal.java</tt>
      <li><tt>Arena.java</tt>
      <li><tt>Tournament.java</tt>
      <li><tt>TournamentTest.java</tt>
    </ul>
  </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed Survey Mark [2 pts bonus]</h3>
        </div>
        <div class="panel-body">
        At the beginning of the lab, show your TA that you have completed
		Survey 3. Note that the surveys are anonymous so we can't check who
		completed it and who didn't. Once you have submitted, you will need to
		show the TA the notification message. If you leave that screen, we
		won't be able to grade it.
        <p>
        </div>
    </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. The Battle Tournament [29 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise will walk you through how to build a battle tournament
      game.
      First, create a program called <tt>TournamentTest</tt>. You will define
      a class called <tt>TournamentTest</tt> that has a <tt>main</tt> method in it.
      For now, leave this method empty. We will come back to it in a later
      step.
     
      <p>
      <b>[1 pt]</b>
      Add to this project a class called <tt>Arena</tt> by downloading
      <a href=/documents/Arena.java>Arena.java</a>. This class is responsible for setting
      up the environment for individual battles between two animals. Also,
      download <a href=/documents/Tournament.java>Tournament.java</a> and add the
      <tt>Tournament</tt> class to your project. This file is going to take
      the winners from each arena and have them compete in subsequent battles
      in order to get a final winner. For now, these files don't do a lot, but
      you will complete them in later steps of this lab.

      <p>
      <b>[1 pt]</b>
      Add to this project a class called <tt>Animal</tt>. Remember there
      should not be any <tt>main</tt> method in this class. The
      <tt>Animal</tt> class is a template that we will use to create animal
      objects to participate in the battle tournament. To start, create
      private attributes for storing a name, strength, health, score, and a
      boolean variable called <tt>isAlive</tt>.

      <p>
      <b>[1 pt]</b>
      Define two constants to represent the maximum level of strength and the
      maximum level of health that any animal can have. Remember to use proper
      naming convention in defining your constants.

      <p>
      <b>[2 pts]</b>
      Create a constructor that takes name as an input. This method is
      responsible for initializing all the private attributes. First,
      initialize the animal's name to the string that was passed in. Since
      different animals will have varying strengths, initialize the animal's
      strength to be a random number up to the maximum strength you declared
      earlier. Also, initialize health to be of maximum health, score to be 0,
      and <tt>isAlive</tt> to be <tt>true</tt>. By the end of your constructor
      method, all the private attributes should have an initial value.

      <p>
      <b>[3 pts]</b> Although the <tt>Animal</tt> class doesn't do much right
      now, we can still instantiate it and create objects to see if it works
      so far. To do this, go to the <tt>main</tt> method inside the
      <tt>TournamentTest</tt> class and create 8 <tt>Animal</tt> objects. Give
      them whatever names you want. Next, store these variables into an array.
      Then, create a new <tt>Tournament</tt> by passing this array into the
      constructor method. 

      <p>
      Once the basic setup is there, your sample output so far will look
      something like this:
      <pre>
QuarterFinal 1 is about to begin!
Animal@677327b6  vs     Animal@14ae5a5

QuarterFinal 2 is about to begin!
Animal@7f31245a  vs     Animal@6d6f6e28

QuarterFinal 3 is about to begin!
Animal@135fbaa4  vs     Animal@45ee12a7

QuarterFinal 4 is about to begin!
Animal@330bedb4  vs     Animal@2503dbd3
      </pre>
      
      <p>
      Note that there are some funny addresses being displayed. This is
      because inside the <tt>Arena</tt> class, its <tt>toString()</tt> method
      calls a competitor's <tt>toString()</tt> method. Since a competitor is
      an <tt>Animal</tt>, and we have not yet defined a <tt>toString()</tt>
      method inside the <tt>Animal</tt> class yet, Java will by default print
      the memory address representing that <tt>Animal</tt> object.

      <p>
      <b>[2 pts]</b>
      To see which <tt>Animal</tt> object is competing, define a
      <tt>toString()</tt> method inside the <tt>Animal</tt> class that
      summarizes the animal's information (including name, strength, and
      score). For example: BigBear (Strength: 90, Score: 144). Now, your
      output will look something like this:

      <pre>
QuarterFinal 1 is about to begin!
Hippy Pappa (Strength: 16, Health: 50, Score: 0)     vs     King Croc (Strength: 12, Health: 50, Score: 0)

QuarterFinal 2 is about to begin!
Grrrrr Izzly (Strength: 17, Health: 50, Score: 0)    vs     Jumbo Beef (Strength: 35, Health: 50, Score: 0)

QuarterFinal 3 is about to begin!
Happy Llama (Strength: 6, Health: 50, Score: 0)  vs     Croc Lock and Drop (Strength: 4, Health: 50, Score: 0)

QuarterFinal 4 is about to begin!
Fuzzy Wuzzy (Strength: 49, Health: 50, Score: 0)     vs     Grass Lover (Strength: 26, Health: 50, Score: 0)
      </pre>

      <p>
      <b>[2 pts]</b>
      In the next few steps, we will define methods in the <tt>Animal</tt>
      class that enable an animal to take part in a tournament. First, define
      a method with the following header: 
      <br>
      <tt>public void injure( int damage )</tt>
      <br>
      When an animal is hit, it will receive some amount of damage. This
      method subtracts the amount of damage from the animal's health. If after
      taking the damage the health value drops below 0, then set
      <tt>isAlive</tt> to <tt>false</tt> to indicate that the animal has
      fainted.

      <p>
      <b>[3 pts]</b>
      Next, define a method with the following header:
      <br>
      <tt>public void attack( Animal opponent )</tt>
      <br>
      When an animal attacks, it hits the opponent, which causes the opponent
      to receive damage. In this method, generate a random amount of strength
      in a hit (any positive value up to the animal's own strength). Then hit
      the opponent with this amoutn by calling the opponent's
      <tt>injure()</tt> method. Consequently, this animal's score will
      increase by the same amount. 
      Finally, print out the animal's attack on the opponent. Also, if the
      opponent has fainted after being hit, print out that the opponent
      fainted.

      <p>
      <b>[2 pts]</b>
      In order for your <tt>attack()</tt> method to work, you will need to
      create the necessary getters and setters. Take a look at your
      <tt>attack()</tt> method and see if there are any cases where you want
      to reference another object's private attributes. Since they are
      private, you cannot access them directly. In those cases, create getter
      methods.

      <p>
      <b>[5 pts]</b>
      In the next few steps, we will work on the <tt>Arena</tt> class. First,
      let's work on completing the <tt>startBattle()</tt> method. With two
      competitors in an arena, you want the battle to go on until someone
      faints. So write a loop that checks to see that as long as both
      competitors are alive, you will do the following: 1. randomly pick one
      competitor to do the first hit, 2. if the receiver of the attack faints,
      then determine a winner and a loser and the battle is over, 3. if nobody
      fainted, then have the second competitor hit back, 4. again, check if
      the receiver of the attack fainted or not, determine a winner and a
      loser, and end the battle. To keep track of the winner and loser of a
      battle, you will need to create private attributes of type
      <tt>Animal</tt>. You may find that you need additional accessor methods
      in the <tt>Animal</tt> class as well. 
      
      <p>
      Because <tt>startBattle()</tt> involves having the competitors call its
      <tt>attack()</tt> method, which in turn calls its <tt>injure()</tt>
      method, you are indirectly testing whether those methods work as well.

      <p>
      Sample output so far:
      <pre>
QuarterFinal 1 is about to begin!
Hippy Pappa (Strength: 6, Health: 50, Score: 0)  vs     King Croc (Strength: 49, Health: 50, Score: 0)

King Croc hits Hippy Pappa for 31 damage
Hippy Pappa hits King Croc for 3 damage
King Croc hits Hippy Pappa for 18 damage
Hippy Pappa hits King Croc for 5 damage
Hippy Pappa hits King Croc for 1 damage
King Croc hits Hippy Pappa for 12 damage
Hippy Pappa fainted

QuarterFinal 2 is about to begin!
.
.
.
QuarterFinal 4 is about to begin!
Fuzzy Wuzzy (Strength: 41, Health: 50, Score: 0)     vs     Grass Lover (Strength: 49, Health: 50, Score: 0)

Fuzzy Wuzzy hits Grass Lover for 22 damage
Grass Lover hits Fuzzy Wuzzy for 35 damage
Grass Lover hits Fuzzy Wuzzy for 39 damage
Fuzzy Wuzzy fainted
      </pre>

      <p>
      Now that we've gotten the code for individual battles to work, let's
      turn to the <tt>Tournament</tt> class. Recall that in this class, the
      constructor instantiated several <tt>Arena</tt> battles with the
      competitors you created. Now, what we want to do is to take the winner
      of each of these battles and have them participate in a semifinal. 
      
      <p>
      <b>[2 pts]</b> 
      With 4 winners, you will need to setup 2 semifinal battles. The
      <tt>Tournament</tt> file has already defined these attributes as
      <tt>semi1</tt> and <tt>semi2</tt>. Now, you need to instantiate them by
      referencing the winner of <tt>quarter1</tt>, the winner of
      <tt>quarter2</tt>, and so forth, and pass those into the <tt>Arena</tt>
      constructor. (Recall that your <tt>Arena</tt> class keeps track of the
      <tt>winner</tt> of each battle. Write an accessor method for it.)

      <p>
      <b>[1 pt]</b>
      Once you get the semifinals working, do the same to instantiate
      <tt>finalRound</tt> by creating an <tt>Arena</tt> battle between the
      winners of the two semifinals.

      <p>
      Sample output so far (the QuarterFinals 1-3 have similar results as before):
      <pre>
.
.
.
QuarterFinal 4 is about to begin!
Fuzzy Wuzzy (Strength: 37, Health: 50, Score: 0)     vs     Grass Lover
(Strength: 17, Health: 50, Score: 0)

Grass Lover hits Fuzzy Wuzzy for 16 damage
Fuzzy Wuzzy hits Grass Lover for 34 damage
Fuzzy Wuzzy hits Grass Lover for 19 damage
Grass Lover fainted

SemiFinal 1 is about to begin!
Hippy Pappa (Strength: 33, Health: 9, Score: 72)     vs     Grrrrr Izzly
(Strength: 49, Health: 40, Score: 83)

Grrrrr Izzly hits Hippy Pappa for 37 damage
Hippy Pappa fainted

SemiFinal 2 is about to begin!
Happy Llama (Strength: 37, Health: 26, Score: 65)    vs     Fuzzy Wuzzy
(Strength: 37, Health: 34, Score: 53)

Happy Llama hits Fuzzy Wuzzy for 36 damage
Fuzzy Wuzzy fainted

Final Round is about to begin!
Grrrrr Izzly (Strength: 49, Health: 40, Score: 120)  vs     Happy Llama
(Strength: 37, Health: 26, Score: 101)

Grrrrr Izzly hits Happy Llama for 23 damage
Happy Llama hits Grrrrr Izzly for 19 damage
Happy Llama hits Grrrrr Izzly for 7 damage
Grrrrr Izzly hits Happy Llama for 16 damage
Happy Llama fainted
      </pre>

      <p>
      <b>[2 pts]</b>
      Once you get all the battles setup, the final step is to print out the
	  results of the entire tournament. Note that the <tt>Tournament</tt>
	  class has a <tt>sortResults()</tt> method provided already. What you
	  have to do now is to define a method for printing the results with the
	  following header:
      <br>
      <tt>private void printResults()</tt>
      <br>
      In this method, call <tt>sortResults()</tt> method. Then, simply loop
      through each competitor in your <tt>competitors</tt> array and display
      the results.

      <p>
	  Note that since <tt>sortResults()</tt> and <tt>printtResults()</tt> are
	  methods that do not get called from outside the class where they are
	  defined, these methods have a <tt>private</tt> modifier.

      <p>
      Sample output (the battle outputs are similar to the results before):
      <pre>
.
.
.
Hippy Pappa has won the tournament! Total points for all competitors are:
Grass Lover (Strength: 23, Health: -2, Score: 97)
Croc Lock and Drop (Strength: 43, Health: -10, Score: 90)
Hippy Pappa (Strength: 21, Health: 22, Score: 86)
Grrrrr Izzly (Strength: 19, Health: -6, Score: 55)
Jumbo Beef (Strength: 26, Health: -5, Score: 44)
Happy Llama (Strength: 45, Health: -17, Score: 42)
Fuzzy Wuzzy (Strength: 16, Health: -7, Score: 9)
King Croc (Strength: 2, Health: -4, Score: 6)
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
