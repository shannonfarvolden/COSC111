@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 4 [22 pts]</h2>
        <p>Working with Strings and Characters</p>
        The purpose of this lab is to give you hands on practice with methods
        in the String class and working with variables of type <tt>char</tt>.
        If you need clarification with any of the steps below, ask your TA
        and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 4 (nothing to submit)
            <li>SwapVowels.java 
            <li>PrizeDraw.java 
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
        At the beginning of the lab, show your TA for completing at least one
        attempt for Quiz 4.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Swap Two Vowels [8 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gets you to practice working with the characters in a
        string. First, create a program called <tt>SwapVowels</tt>.
        <p>

        <b>[1 pt]</b> 
        Create a single Scanner object and ask the user to enter a word as
        input from the user. Ask the user to make sure the word has a letter
        'a' and a letter 'e' in it.
        <p>

        <b>[1 pt]</b> 
        Given the entered word, find the indices of the letters 'a' and 'e' in
        the word. 
        <p>
        
        <b>[1 pt]</b> 
        If the word is missing either of these letters, display an error
        message back to the user. In this case, the program will end.
        <p>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
octopus
Your word does not have the letter 'a' in it
        </pre>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
yellow
Your word does not have the letter 'a' in it
        </pre>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
alpha
Your word does not have the letter 'e' in it
        </pre>

        <b>[3 pts]</b> 
        If the word has both letters 'a' and 'e', create a new word that has
        the two letters swapped, while leaving the rest of the word intact. Be
        sure to check for words where 'a' appears before 'e', and words where
        'a' appears after 'e'.
        <p>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
apple
New word: eppla
        </pre>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
recall
New word: racell
        </pre>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
treaty
New word: traety
        </pre>

        Note that if a word has multiple instances of 'a' (e.g., "karate"), or
        multiple instances of 'e' (e.g., "kaleidoscope"), only the first
        instance of the two letters will be swapped.

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
karate
New word: kerata
        </pre>

        Sample output:
        <pre>
Enter a word with 'a' and 'e' in it: 
kaleidoscope
New word: kelaidoscope
        </pre>

        <b>[1 pt]</b> 
        Lastly, be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help
        you got, and what the purpose of this program is.

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Prize Draw for Winner [13 pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b> 
        This exercise gives you practice comparing Strings. First, create a
        program called <tt>PrizeDraw</tt>.
        <p>

        <b>[1 pt]</b> 
        Set up your program so you can read in 3 names from the user.
        <p>

        <b>[1 pt]</b> 
        Remember to create only one Scanner object when you are setting up the
        keyboard as the input source.
        <p>

        <b>[1 pt]</b> 
        Randomly pick a letter between 'a' and 'z'. That is, use the random
        number generator to pick a number between 1 and 26, then augment that
        number to match the numeric value of the range for 'a' to 'z'. Once
        you have that number, convert it back to the letter to see which
        letter your program picked.
        <p>

        The idea is that your program will randomly pick a letter between 'a'
        and 'z'. The person with the name starting with that random letter
        will be the chosen winner. (We will handle cases where there are
        multiple winners, or if nobody's name starts with that letter.)
        <p>

        Sample output (so far):
        <pre> 
Enter first name: 
edward
Enter second name: 
greg
Enter third name: 
terry

Is there a name that starts with: d
        </pre> 

        Sample output (so far):
        <pre> 
Enter first name: 
george
Enter second name: 
henry
Enter third name: 
william

Is there a name that starts with: w
        </pre> 

        <b>[4 pts, 0.5 pt per case]</b> 
        Once you have the above setup, structure the rest of your code as
        follows: design the structure of your program so that it can determine
        whether each name starts with the randomly generated letter. For now,
        just print out the matching names so you can verify your program is
        doing the right thing. You will want to display the randomly generated
        letter first before asking the user for input as well (so it's easier
        to test your program).
        The cases to consider are as follows: 
        <ul>
        <li> When all 3 names match
        <li> When any of the 2 names match (there are 3 possible combinations:
        names 1 and 2, names 1 and 3, or names 2 and 3)
        <li> When only 1 name matches (there are 3 possible combinations)
        <li> When none of the names match
        </ul>
        <p>
        <b>You will only get full marks if your solution does NOT use
		<tt>System.exit</tt>.</b> 
        <p>

        <b>[1 pt]</b> 
        Once you've got the program working, change your print statement so
        that when 3 names match, there will be a re-draw.
        <p>

        Sample output:
        <pre> 
Is there a name that starts with: e
Enter first name: 
edward
Enter second name: 
edgar
Enter third name: 
eve
3 matches (Re-draw): edward, edgar, eve
        </pre> 

        <b>[1 pt]</b> 
        When any 2 of the 3 names match, you will compare the two names and
        the winner will be the one that has a second letter earlier on in the
        alphabet.
        <p>

        Sample output:
        <pre> 
Is there a name that starts with: r
Enter first name: 
raymond
Enter second name: 
reverend
Enter third name: 
greg
2 matches: raymond, reverend
Winner is: raymond
        </pre> 

        <b>[1 pt]</b> 
        When only 1 name matches, the winner will be that person.
        <p>

        Sample output:
        <pre> 
Is there a name that starts with: w
Enter first name: 
henry
Enter second name: 
will 
Enter third name: 
frank
Winner is: will
        </pre> 

        <b>[1 pt]</b> 
        When none of the names match, there will be a re-draw.
        <p>

        Sample output:
        <pre> 
Is there a name that starts with: q
Enter first name: 
john
Enter second name: 
dylan
Enter third name: 
sam
No match (Re-draw)
        </pre> 

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
