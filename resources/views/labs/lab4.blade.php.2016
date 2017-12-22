@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 4 [25 pts]</h2>
        <p>Working with Strings and Characters</p>
        The purpose of this lab is to give you hands on practice with methods
        in the String class and working with variables of type <tt>char</tt>.
        If you need clarification with any of the steps below, ask your TA
        and/or your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
          <li><tt>SortCampusMail.java</tt>
          <li><tt>SwapLetters.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
            At the beginning of the lab, show your TA for completing at least one
            attempt for Quiz 4.
            <p>
        </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">2. Sorting Mail [14 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise gets you to practice using Strings.
      First, create a program called <tt>SortCampusMail</tt>. 
      
      <p>
      <b>[1 pt]</b>
      Set up your program so you can read in a school address and 3 professor names from the user.
      
      <p>
      <b>[1 pt]</b>
      Remember to create only <b>one</b> Scanner object when you are setting
      up the keyboard as the input source.
      
      <p>
      <b>[1 pt]</b>
      Store the address and names into different variables of type
      <tt>String</tt>. Note that the user response may consist of more than
      one word separated by a space (e.g., Bowen Hui).
      
      <p>
      <b>[1 pt]</b>
      Find out if the delivery address is the SCI building or the ASC
      building. Go through the list of String methods and decide which method
      to use. Once you find out, display it back to see which building you are
      going to. By this point, your program should be able to do the following.

      <p>
      Sample output (so far):
      <pre>
What is the address of delivery?
Dept of Computer Science, SCI building
Who is the first letter sent to?
Bowen
Who is the second letter sent to?
Abdallah
Who is the third letter sent to?
Yong 
Going to the Science building...
      </pre>

      Another sample output (so far):
      <pre>
What is the address of delivery?
Computer Science, ASC building
Who is the first letter sent to?
Yves Lucet
Who is the second letter sent to?
Ramon Lawrence
Who is the third letter sent to?
Ramon Lawrence
Going to the ASC building...
      </pre>
      Make sure your program extracts the right building name before moving
      on.
      <p>

      <p>
      <b>[1 pt]</b>
      Next, compare the names on the letters and sort them alphabetically. 
      Use an appropriate string comparison methods to compare these three
      variables. 

      <p>
      <b>[1 pt]</b>
      You sorting should be case insensitive. That is, the user may enter
      "Bowen" or "bowen". In either case, "Bowen" or "bowen" should come
      before "Yong" or "yong".
      
      <p>
      Once softed, display the order of the names on the letters.

      <p>
      <b>[6 pts, 1 for each test case]</b>
      Ensure your program works properly by testing it with 3 names and
      inputting them in 6 different orders when entering the names as input.
      See sample output for these combinations.
      
      <p>
      Sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Abdallah
Who is the second letter sent to?
Bowen
Who is the third letter sent to?
Yong
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      Another sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Abdallah
Who is the second letter sent to?
Yong
Who is the third letter sent to?
Bowen
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      Another sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Bowen
Who is the second letter sent to?
Abdallah
Who is the third letter sent to?
Yong
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      Another sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Bowen
Who is the second letter sent to?
Yong
Who is the third letter sent to?
Abdallah
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      Another sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Yong 
Who is the second letter sent to?
Abdallah
Who is the third letter sent to?
Bowen
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      Another sample output:
      <pre>
What is the address of delivery?
SCI building
Who is the first letter sent to?
Yong 
Who is the second letter sent to?
Bowen
Who is the third letter sent to?
Abdallah
Going to the Science building...
Delivering to Abdallah, then Bowen, then Yong
      </pre>

      <p>
      <b>[1 pt]</b> Lastly, be sure to write comments above your class to
      indicate the author of this file (you), acknowledgements for any
      external help you got, and what the purpose of this program is.
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">3. Swap Letters in a Word [10 pts]</h3>
    </div>
    <div class="panel-body">
      <p>
      <b>[1 pt]</b>
      This exercise gets you to practice working with the characters in a
      string.
      First, create a program called <tt>SwapLetters</tt>. 
      
      <p>
      <b>[1 pt]</b>
      Create a single Scanner object and ask the user to enter a word as input
      from the user.

      <p>
      <b>[1 pt]</b>
      Make sure the word has at least 5 letters in it. If not, display an
      error message back to the user (and the program will end).

      <p>
      What you want to do is swap the second and fourth letters of the word
      that the user entered. The plan is to extract the letters from the word,
      then glue them back, but in a new order.

      <p>
      <b>[1 pt]</b>
      Given a word, extract the second letter and the fourth letter from it
      and store these two characters into separate <tt>char</tt> variables.

      <p>
      Next, figure out how to extract the first letter from the word, the
      third letter of the word, and the remaining letters of the word. Note
      that these could be of type <tt>char</tt> or <tt>String</tt>.

      <p>
      <b>[1 pt for putting the word together, 1 pt for right order]</b>
      Now, concatenate the letters back in the order of: first letter, fourth
      letter (of type <tt>char</tt>), third letter, second letter (of type
      <tt>char</tt>), and the rest of the letters in the word.

      <p>
      <b>[1 pt]</b>
      Display the new word to the screen and ensure it has the letters in the
      right order. 

      <p>
      <b>[1 pt]</b>
      Calculate the percentage of the letters that got swapped and display
      that too. 

      <p>
      Sample output:
      <pre>
Enter a word with at least 5 letters: 
antidisestablishmentarianism
aitndisestablishmentarianism
7.14% of the letters were swapped.
      </pre>

      <p>
      <b>[1 pt]</b>
      To ensure that your numbers print out only 2 decimal digits, use the
      method <tt>System.out.printf</tt> to format them properly. In this
      method, you first pass it the string you want to display, then pass it
      the arguments that are needed inside the string. You use a percent sign
      to indicate that you will pass it an argument, and for a floating point
      number, you can also specify how many digits you wish to be displayed.
      For example, if <tt>score</tt> is 12.348 then
      <tt>System.out.printf( "Total: %.2f", score );</tt> displays the string
      "Total: 12.35". 
      
      For further examples, see the explanation in Ch4 of the textbook.

      <p>
      <b>[1 pt]</b>
      In formatting your output, use "%%" as an escape sequence to display "%"
      in the <tt>System.out.printf</tt> method.

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
