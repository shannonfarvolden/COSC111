@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 9 [39 pts]</h2>
        <p>Working with Classes and Objects</p>
        The purpose of this lab is to give you hands on practice with building
        classes and objects.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li>Peer evaluation forms for your team
            <li><tt>Item.java</tt>
            <li><tt>TestItem.java</tt>
            <li><tt>Quiz.java</tt>
            <li><tt>TestQuiz.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Peer Evaluation Forms [2 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[2 pts]</b>
                The TA will distribute evaluation forms for you to complete. Be sure to
                complete one form for each member of your team. Based on the in-class
                activities you have done so far, evaluate each team member using the
                rubric provided.

            <p>
                This evaluation mark, when averaged across the team,
                will be used as a multiplier to the marks you received for the
                activities completed in class. For example, if your team received 10/10
                on an exercise, and your peer evaluation mark is 110%, then your
                individual mark for that exercise becomes 110% times 10/10 which is
                11/10. Likewise, if you got 10/10 on a team exercise but your peer
                evaluation mark is 50%, then your individual mark becomes 5/10.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Defining Questions [13 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to build a basic component of a multiple choice
                question.
                First, create a program called <tt>Item</tt>.

            <p>
                <b>[1 pt]</b>
                An <i>item</i> represents an entire multiple choice question, which
                includes a question, a ste of possible answers, and the correct answer.
                In the <tt>Item</tt> class, create the following attributes: a
                a <tt>String</tt> called <tt>question</tt>,
                a <tt>String</tt> array called <tt>possibleAnswers</tt>, and
                a <tt>char</tt> called <tt>correctAnswer</tt>.

            <p>
                <b>[2 pts]</b>
                Create a contructor method with the following header:<br>
                <tt>public Item( String q, String[] pa, char ca )</tt><br>
                so that in the method, you initialize each of the attributes with the
                arguments that are passed into the method.

            <p>
                <b>[3 pts: 1 pt for each accessor]</b>
                Create an accessor method for each of the attributes in the class.

            <p>
                <b>[2 pts: 1 for loop, 1 for right text info]</b>
                Create a <tt>toString</tt> method with the following header:<br>
                <tt>public String toString()</tt><br>
                so that it concatenates the <tt>question</tt> and
                <tt>possibleAnswers</tt> into a single string. When you handle
                <tt>possibleAnswers</tt>,
                you will want to use a loop to concatenate each of the elements in
                <tt>possibleAnswers</tt> (with a prefix of a, b, c, d in front of each
                element). See the sample output below to ensure this makes sense.

            <p>
                <b>[1 pt]</b>
                Download <a href="/documents/TestItem.java"><tt>TestItem.java</tt></a> and
                make sure that code in the <tt>main</tt> method makes sense to you.
                Run the program and when it works, it will generate the following sample
                output:
      <pre>
Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

The correct answer is: c.
      </pre>

            <p>
                <b>[2 pts: 1 for definition, 1 for display]</b> In
                <tt>TestItem.java</tt>, create one more item with the question "Who is
                Tom?", possible answers being "A cat", "A dog", "A girrafe", and "A
                cow", and the correct answer being option 'a' (remember this needs to be
                a character). Display the item and show the correct answer of the item.
                When this works, the sample output should look like the following:

      <pre>
Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

The correct answer is: c.
Who is Tom?
a) A cat
b) A dog
c) A girrafe
d) A cow

The correct answer is: a.
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Making a Quiz [24 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise will enable you to make a multiple choice quiz using the
                program you completed in the previous question.
                First, create a program called <tt>Quiz</tt>.
                Add to this project a copy of the <tt>Item</tt> class you created in the
                previous question. (Add only <tt>Item.java</tt> and <i><b>not</b></i>
                <tt>TestItem.java</tt>.)

            <p>
                We will design a quiz that lets a user see one question at a time, enter
                an answer for that question, and keep track of the overall score of the
                quiz.

            <p>
                <b>[1 pt]</b> To accomplish this, define the following attributes:
                a <tt>String</tt> called <tt>title</tt> for the quiz,
                an <tt>Item</tt> array called <tt>items</tt> that store all the
                questions created for the quiz,
                an <tt>int</tt> called <tt>score</tt>, and
                an <tt>int</tt> called <tt>currentQuestion</tt> that keeps track of the
                current question the user is on.

            <p>
                <b>[2 pts]</b> Create a constructor method with the following
                header:<br>
                <tt>public Quiz( String t, Item[] i )</tt><br>
                so that in the method, you initialize <tt>title</tt> and <tt>items</tt>
                with the arguments that are passed into the method.
                In the constructor, be sure to also initialize
                <tt>score</tt> to 0 (since the quiz hasn't started) and
                <tt>currentQuestion</tt> to -1.
                (This variable will be used as the index
                to the <tt>items</tt> array, so since the quiz hasn't started, the value
                is -1. When the quiz is running, the value may be anywhere between 0 and
                up to <tt>items.length</tt>.)

            <p>
                <b>[2 pts: 1 for loop, 1 for calling <tt>toString</tt>]</b>
                Create a toString method with the following header:<br>
                <tt>public String toString()</tt><br>
                so that it concatenates the title and each element in <tt>items</tt>
                into a single string. Note that an element in the <tt>items</tt> array
                is an object of the <tt>Item</tt> class you created in the previous
                question. That means, you can call any method that was defined in the
                <tt>Item</tt> class. Since you already wrote a <tt>toString</tt> method
                in the <tt>Item</tt> class, call this method when you loop through the
                elements of the array.

            <p>
                <b>[1 pt]</b> Once you get the constructor and <tt>toString</tt> methods
                working, you can start to test your code. Add another file to your
                project called <tt>TestQuiz</tt> which will have the main method in it.
                In the <tt>main</tt> method, create a new title called "Quiz about
                Cartoon Characters", and 5 <tt>Item</tt> objects (just as you did in the
                previous question). Add these objects to an array.

            <p>
                <b>[1 pt]</b> In <tt>TestQuiz</tt>:
                Create a new <tt>Quiz</tt> object called <tt>cartoonQuiz</tt> with
                the title and array (from the last step) as input parameters to the
                constructor method.

            <p>
                <b>[1 pt]</b> In <tt>TestQuiz</tt>:
                call the <tt>toString</tt> method of <tt>cartoonQuiz</tt> and display
                the quiz.

            <p>
                <b>[3 pts: 1 pt for each accessor]</b> In <tt>Quiz</tt>:
                Create an accessor method for
                <tt>title</tt>, <tt>items</tt>, and <tt>score</tt>.

            <p>
                <b>[2 pts]</b> In <tt>Quiz</tt>:
                Define a method with the following header:<br>
                <tt>public Item getNextQuestion()</tt><br>
                so that the method retrieves the <tt>Item</tt> for the
                <tt>currentQuestion</tt> and returns that object as output to the
                method. If the quiz has run out of the questions, return <tt>null</tt>.

            <p>
                <b>[1 pt]</b> In <tt>TestQuiz</tt>:
                Continue in the <tt>main</tt> method by adding a <tt>Scanner</tt> object
                that lets the user input the answer to the questions in the quiz.

            <p>
                <b>[3 pts: 1 for loop, 1 for getting next question, 1 for game over]</b> In <tt>TestQuiz</tt>:
                Continue in the <tt>main</tt> method by creating a loop that
                continuously calls <tt>getNextQuestion</tt> (via the
                <tt>cartoonQuiz</tt> object) and displays the question to the user until
                no more questions are available.
                When there are no more questions left, indicate to the user that the
                quiz is over.

            <p>
                <b>[3 pts: 1 for checking right answer, 1 for score update, 1 for
                    feedback]</b> In <tt>Quiz</tt>:
                Add a method with the following header:<br>
                <tt>public String checkAnswer( char ans )</tt><br>
                so that for the particular question the user is on, the method retrieves
                the right answer by calling <tt>getCorrectAnswer</tt> from the
                <tt>Item</tt> class, and sees if that is the same as what the user
                entered into <tt>ans</tt>. Update the score and display appropriate
                feedback depending on the answer.

            <p>
                <b>[1 pt]</b> In <tt>TestQuiz</tt>:
                In the loop you created earlier, rather than only displaying the
                questions in the <tt>cartoonQuiz</tt>, ask the user to enter the answer
                for each question and call <tt>checkAnswer</tt> each time.

            <p>
                <b>[1 pt]</b> In <tt>TestQuiz</tt>:
                When the quiz is over, display the quiz score and the total possible
                points.

            <p>
                Sample output (for a quiz with 2 questions only):
      <pre>
Quiz about Cartoon Characters!

Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

Who is Tom?
a) A cat
b) A dog
c) A girrafe
d) A cow


********** Let's play! **********
Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

What is your answer?  a
That's wrong!
Who is Tom?
a) A cat
b) A dog
c) A girrafe
d) A cow

What is your answer?  a
That's right!
Quiz is over! Your score is: 1 / 2
      </pre>

            <p>
                Sample output (for a quiz with 2 questions only):
      <pre>
Quiz about Cartoon Characters!

Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

Who is Tom?
a) A cat
b) A dog
c) A girrafe
d) A cow


********** Let's play! **********
Who is Jake?
a) A chef
b) A teacher
c) A pirate
d) A taxi driver

What is your answer?  c
That's right!
Who is Tom?
a) A cat
b) A dog
c) A girrafe
d) A cow

What is your answer?  a
That's right!
Quiz is over! Your score is: 2 / 2
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>
@endsection