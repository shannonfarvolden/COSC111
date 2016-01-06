@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 1 [13 pts]</h2>

        <p>Getting Started</p>
        The purpose of this lab is to get you setup and ready to go. You will
        become familiar with the school computer environment and try out some
        sample Java programs. If you need clarification with any of the steps
        below, ask your TA and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA that a "COSC 111" folder has been created in your F
                drive (nothing to submit)
            <li>The file <tt>PrintMyName.java</tt>
            <li>Written answer for the guessing game
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Using School Computers [1 pt]</h3>
        </div>
        <div class="panel-body">
            <p>
                Once you successfully log in, follow these instructions to create a
                folder called "COSC 111" in your account at the <a
                        href={{ url('/school') }}>school computers</a>. This will be the folder where
                you store all your work for this course.

            <p>
                <b>[1 pt]</b> Show your TA that you have created a folder called "COSC
                111" in your F drive.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Working with Eclipse</h3>
        </div>
        <div class="panel-body">
            In this course, we will be using the Eclipse IDE to write, compile, and
            run our Java programs. To get started, follow the instructions on
            opening up <a href={{ url('/eclipse') }}>Eclipse</a> and creating your own
            HelloWorld program. Be sure you name your project, the file, and class
            exactly as shown.
            <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Getting Comfortable with Java [7 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise helps you practice writing basic Java programs. First,
                create a program called <tt>PrintMyName</tt>.

            <p>
                <b>[1 pt]</b>
                For now, this program will simply prints "My name is ..." where ... is
                replaced with your name.

            <p>
                <b>[1 pt]</b>
                Be sure to always save your file with the same name as your class. In
                this case, your file will be called <tt>PrintMyName.java</tt>.
                Run it and make sure it works as expected before going on.

            <p>
                <b>[1 pt for printing, 1 pt for calculation]</b>
                After printing your name, have the program print out your age in dog
                years. The string should be "My age is ... in dog years!" where ... is replaced with your age times 9.
                (One human year is roughly 9 dog years.) Be sure your code has a multiplication formula that calculates the age in dog years.

            <p>
                Sample output:
      <pre>
My name is Celina
My age is 216 in dog years!
      </pre>
            <p>
                <b>[1 pt for proper display of text]</b>
                Note: You write <tt>System.out.println( ... )</tt> to display
                information on separate lines,
                and you write <tt>System.out.print( ... )</tt> to display information on
                the same line.

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">4. The Guessing Game [5 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                The following program asks you (the computer user) to guess what the
                computer's favourite number is. The program code is below.
                Load this program into Eclipse and run it. You can type it in line by
                line as written below, or you can download it from this file <a
                        href="/documents/GuessFavNum.java"><tt>GuessFavNum.java</tt></a>.
                Try running it a few times to see what it does.
      <pre>
1   import java.util.Random;
2   import java.util.Scanner;
3
4   public class GuessFavNum
5   {
6     public static void main( String[] args )
7     {
8       Random rand = new Random();
9       int fav = rand.nextInt( 100 );
10
11      Scanner input = new Scanner( System.in );
12      int guess;
13      System.out.println( "Guess what my favourite (integer) number is? " );
14      guess = input.nextInt();
15
16      if( guess == fav )
17      {
18        System.out.println( "You're right! My fav number is " + fav );
19      }
20      else if( guess < fav )
21      {
22        System.out.println( "That's too low! My fav number is " + fav );
23      }
24      else if( guess > fav )
25      {
26        System.out.println( "That's too high! My fav number is " + fav );
27      }
28    }
29  }
      </pre>
            <p>
                In this exercise, what we want you to do is to look closely at each line
                in <tt>GuessFavNum.java</tt> and try to see if you can guess what it's doing.
                Don't worry if you can't understand everything exactly, just take a
                guess. The purpose of this activity is to get you comfortable with new
                Java code that you will be seeing in the next few weeks.

            <p>
                <b>[1 pt each]</b>
                In particular, answer the following questions by indicating the line
                number(s) in the program:
            <ol>
                <li>Which lines of code generates a random number as the computer's
                    favourite number?

                <li>Which lines of code asks for and takes input from the user as the
                    guess for the computer's favourite number?

                <li>Which line of code checks if the user's guess is the same as the
                    computer's favourite number?

                <li>Which lines of code checks if the user's guess is too low or too
                    high and lets the user know the outcome of the guess?

                <li>Which lines of code imports utility libraries that let you use
                    pre-defined Java classes called Random and Scanner?
            </ol>
            <b>Be careful</b> with the line numbers. Use the ones shown above (in
            case your version in Eclipse has different spacing and line numbers.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">5. (Optional) Setting up Your Personal Laptop</h3>
        </div>
        <div class="panel-body">
            <p>
                If you have your laptop with you and you plan on coding with it, you
                should install Eclipse and then install Java JDK 8.

            <p>
                To download Eclipse, go to <a href=http://www.eclipse.org/downloads/>the
                    official Eclipse website</a> and select "Eclipse IDE for Java
                Developers". From there, choose the operating system that matches your
                machine and follow the instructions.

            <p>
                To download JDK 8, go to <a
                        href=http://www.oracle.com/technetwork/java/javase/downloads/>the
                    official Oracle website</a> and select JDK 8 (or something similar --
                currently, the site says "JDK 8u65"). Once you click on it, it will
                bring you to a page with the appropriate options. Accept the license
                agreement and choose the operating system that matches your machine.
                Then follow the installation instructions.

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