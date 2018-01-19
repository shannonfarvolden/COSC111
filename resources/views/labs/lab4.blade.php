@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 4 [xx pts]</h2>
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
            <h3 class="panel-title">2. Swap Two Vowels [xx pts]</h3>
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
            <h3 class="panel-title">3. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
        xx 
        <p>

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
