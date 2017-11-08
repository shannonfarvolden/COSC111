<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->quiz1();
        $this->quiz2();
        $this->quiz3();
        $this->quiz4();
        $this->quiz5();
        $this->quiz6();
        $this->quiz7();
        $this->quiz8();
        $this->quiz9();
    }

    function quiz1()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 1', 'total' => 10, 'active' => 1]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => '__________ is the brain of a computer.']);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'Hardware', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'CPU', 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'Memory', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'Disk', 'correct' => false]);

        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'Four bytes have ________ bits.']);
        App\Answer::create(['question_id' => $q2->id, 'answer' => '8', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => '16', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => '32', 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => '64', 'correct' => false]);

        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => '____________ are instructions to the computer. ']);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'Hardware', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'Software or Programs', 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'Storage devices', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'Keyboards', 'correct' => false]);

        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => '___________ translates high-level language program into machine language program.']);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'An assembler', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'A compiler', 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'CPU', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'The operating system', 'correct' => false]);

        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'A Java application must have a main method.']);
        App\Answer::create(['question_id' => $q5->id, 'answer' => 'true', 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => 'false', 'correct' => false]);

        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'The main method header is written as:']);
        App\Answer::create(['question_id' => $q6->id, 'answer' => 'public static void main( string[] args )', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => 'public static void Main( String[] args )', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => 'public static void main( String[] args )', 'correct' => true]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => 'public static main( String[] args )', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => 'public void main( String[] args )', 'correct' => false]);

        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'Which of the following statements is correct?']);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'Every line in a program must end with a semicolon.', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'Every statement in a program must end with a semicolon.', 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'Every comment line must end with a semicolon.', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'Every method must end with a semicolon.', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'Every class must end with a semicolon.', 'correct' => false]);

        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'The keywords in Java are all in lowercase.']);
        App\Answer::create(['question_id' => $q8->id, 'answer' => 'true', 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => 'false', 'correct' => false]);

        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'Which of the following are the reserved words?']);
        App\Answer::create(['question_id' => $q9->id, 'answer' => 'public', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => 'static', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => 'void', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => 'main', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => 'all of the above', 'correct' => true]);

        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => 'If a program compiles fine, but it produces incorrect result, then the program suffers from __________.']);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'a compilation error', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'a runtime error', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'a logic error', 'correct' => true]);
    }

    function quiz2()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 2', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "If you enter 1 2 3, when you run this program, what will be the output?

import java.util.Scanner;

public class Test1 {
  public static void main(String[] args) {
    Scanner input = new Scanner(System.in);
    System.out.print(\"Enter three numbers: \");
    double number1 = input.nextDouble();
    double number2 = input.nextDouble();
    double number3 = input.nextDouble();

    // Compute average
    double average = (number1 + number2 + number3) / 3;

    // Display result
    System.out.println(average);
  }
}"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id,'question' => "To assign a value 1 to variable x, you write"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of these data types requires the most amount of memory?"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the result of 45 / 4?"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following expression results in a value 1?"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The expression 4 + 20 / (3 - 1) * 2 is evaluated to"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "To assign a double variable d to a float variable x, you write"]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following expressions will NOT yield 0.5?"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following operators has the highest precedence?"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following are not valid assignment statements?"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => '1.0', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '2.0', 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '3.0', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '4.0', 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => '1 = x;', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x = 1;', 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x := 1;', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => '1 := x;', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x == 1;', 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => 'long', 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'int', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'short', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'byte', 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => '10', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => '11', 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => '11.25', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => '12', 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => '2 % 1', 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => '15 % 4', 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => '25 % 5', 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => '37 % 6', 'correct' => true]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => '4', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '20', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '24', 'correct' => true]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '9', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '25', 'correct' => false]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => 'x = (long)d', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'x = (int)d;', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'x = d;', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'x = (float)d;', 'correct' => true]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => '1 / (double)2', 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => '1.0 / 2', 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => '(double) (1 / 2)', 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => '(double) 1 / 2', 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => '1 / 2.0', 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => 'casting', 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '+', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '*', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '/', 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => 'x = 55;', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'x = 56 + y;', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => '55 = x;', 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'x += 3;', 'correct' => false]);

    }

    function quiz3()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 3', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is 1 - 0.1 - 0.1 - 0.1 - 0.1 - 0.1 == 0.5?"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Suppose x = 1, y = -1, and z = 1. What is the printout of the following statement? (Please indent the statement correctly first.)

if (x > 0)
   if (y > 0)
      System.out.println(\"x > 0 and y > 0\");
else if (z > 0)
      System.out.println(\"x < 0 and z > 0\");"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code:

boolean even = false;
if (even = true) {
  System.out.println(\"It is even!\");
}"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

boolean even = false;
if (even) {
  System.out.println(\"It is even!\");
}"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The following code displays ___________.

double temperature = 50;

if (temperature >= 100)
  System.out.println(\"too hot\");
else if (temperature <= 40)
  System.out.println(\"too cold\");
else
  System.out.println(\"just right\");"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the expressions below generates a syntax error?"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following is the correct expression that evaluates to true if the number x is between 1 and 100 or the number is negative?"]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the value of the following expression?
true || true && false"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following statement is NOT true?"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code:

    // Enter an integer
    Scanner input = new Scanner(System.in);
    int number = input.nextInt();

    if (number <= 0)
      System.out.println(number);"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => 'true', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'false', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => 'There is no guarantee that 1 - 0.1 - 0.1 - 0.1 - 0.1 - 0.1 == 0.5 is true.', 'correct' => true]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x > 0 and y > 0;', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x < 0 and z > 0;', 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'x < 0 and z < 0;', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => 'no printout.', 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => 'The program has a compile error.', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'The program has a runtime error.', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'The program runs fine, but displays nothing.', 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => 'The program runs fine and displays It is even!.', 'correct' => true]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => 'The code displays It is even!', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'The code displays nothing.', 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'The code is wrong. You should replace if (even) with if (even == true)', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'The code is wrong. You should replace if (even) with if (even = true)', 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => 'too hot', 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => 'too cold', 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => 'just right', 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => 'too hot too cold just right', 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => '(true) && (3 >= 4)', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '!(x > 0) && (x > 0)', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '(x > 0) || (x < 0)', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '(x != 0) || (x = 0)', 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => '(-10 < x < 0)', 'correct' => true]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => '1 < x < 100 && x < 0', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '((x < 100) && (x > 1)) || (x < 0)', 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '((x < 100) && (x > 1)) && (x < 0)', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '(1 > x >  100) || (x < 0)', 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => 'true', 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => 'false', 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => '(x > 0 && x < 10) is same as ((x > 0) && (x < 10))', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '(x > 0 || x < 10) is same as ((x > 0) || (x < 10))', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '(x > 0 || x < 10 && y < 0) is same as (x > 0 || (x < 10 && y < 0))', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '(x > 0 || x < 10 && y < 0) is same as ((x > 0 || x < 10) && y < 0)', 'correct' => true]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => 'The if statement is wrong, because it does not have the else clause;', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'System.out.println(number); must be placed inside braces;', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'If number is zero, number is displayed;', 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'If number is positive, number is displayed.', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'number entered from the input cannot be negative.', 'correct' => false]);

    }

    function quiz4()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 4', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is Math.round(3.6)?"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following is the correct expression of character 4?"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following statement prints smith\\exam1\\test.txt?"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the printout of System.out.println('z' - 'a')?"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "To check whether a character variable ch is an uppercase letter, you write ___"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Suppose s is a string with the value \"java\". What will be assigned to x if you execute the following code?

char x = s.charAt(4);"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Suppose s1 and s2 are two strings. What is the result of the following code?

s1.equals(s2) == s2.equals(s1)"]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "To check if a string s contains the prefix \"Java\", which of the following does NOT work?"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following is NOT a possible output for (int)(51 * Math.random())?"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Math.pow(3, 3) returns _______."]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => '3.0', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '3', 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '4', 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => '4.0', 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => '4', 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "\"4\"", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "'\0004'", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "'4'", 'correct' => true]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "System.out.println( \"smith\\exam1\\test.txt\" );", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "System.out.println(\"smith\\\\exam1\\\\test.txt\");", 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "System.out.println(\"smith\\\"exam1\\\"test.txt\");", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "System.out.println(\"smith\"\\exam1\"\\test.txt\");", 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => '25', 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => '26', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'a', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'z', 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "(ch >= 'A' && ch >= 'Z')", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "(ch >= 'A' && ch <= 'Z')", 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "(ch >= 'A' || ch <= 'Z')", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "('A' <= ch <= 'Z')", 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "'a'", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "'v'", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "Nothing will be assigned to x, because the execution causes the runtime error StringIndexOutofBoundsException.", 'correct' => true]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => 'true', 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => 'false', 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "if (s.startsWith(\"Java\")) ...", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "if (s.indexOf(\"Java\") == 0) ...", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "if (s.substring(0, 4).equals(\"Java\")) ...", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "if (s.charAt(0) == 'J' && s.charAt(1) == 'a' && s.charAt(2) == 'v' && s.charAt(4) == 'a') ...", 'correct' => true]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => '0', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '1', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '50', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '51', 'correct' => true]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => '27', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => '9', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => '27.0', 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => '9.0', 'correct' => false]);

    }

    function quiz5()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 5', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

int count = 0;
while (count < 100) {
  // Point A
  System.out.println(\"Welcome to Java!\");
  count++;
  // Point B
}
// Point C"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following loops correctly computes 1/2 + 2/3 + 3/4 + ... + 99/100?
A:
double sum = 0;
for (int i = 1; i <= 99; i++) {
  sum = i / (i + 1);
}
System.out.println(\"Sum is \" + sum);\n

B:
double sum = 0;
for (int i = 1; i < 99; i++) {
  sum += i / (i + 1);
}
System.out.println(\"Sum is \" + sum);\n

C:
double sum = 0;
for (int i = 1; i <= 99; i++) {
  sum += 1.0 * i / (i + 1);
}
System.out.println(\"Sum is \" + sum);\n

D:
double sum = 0;
for (int i = 1; i <= 99; i++) {
  sum += i / (i + 1.0);
}
System.out.println(\"Sum is \" + sum);\n

E:
double sum = 0;
for (int i = 1; i < 99; i++) {
  sum += i / (i + 1.0);
}
System.out.println(\"Sum is \" + sum);
"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "How many times is the println statement executed?

for (int i = 0; i < 10; i++) 
  for (int j = 0; j < i; j++) 
    System.out.println(i * j)"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the printout after the following loop terminates?

int number = 25;
int i;

boolean isPrime = true;
for (i = 2; i < number && isPrime; i++) {
  if (number % i == 0) {
    isPrime = false;
  }
}

System.out.println(\"i is \" + i + \" isPrime is \" + isPrime);"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "How many iterations will the following loop execute?

  for (int i = 1; i <= n; i++) {
    // iteration
  }"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

double sum = 0;
for (double d = 0; d < 10; sum += sum + d)  {  
  d += 0.1;
}"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the value of balance after the following code is executed?
int balance = 10;

while (balance >= 1) {
  if (balance < 9) 
    break;
  balance = balance - 9;
}"]);

        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the output of the following fragment?

int i = 1;
int j = 1;
while (i < 5) {
  i++;
  j = j * 2;
}
System.out.println(j);"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the output of the following fragment?

    for (int i = 0; i < 15; i++) {
      if (i % 4 == 1)
        System.out.print(i + \" \"); 
    }"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the output of the following code:

for ( ; false ; ) 
  System.out.println(\"Welcome to Java\");"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => "count < 100 is always true at Point A", 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "count < 100 is always true at Point B", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "count < 100 is always false at Point B", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "count < 100 is always true at Point C", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "count < 100 is always false at Point A", 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => "BCD", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "ABCD", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "B", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "CDE", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "CD", 'correct' => true]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "100", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "20", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "10", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "45", 'correct' => true]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => 'i is 5 isPrime is true', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'i is 5 isPrime is false', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'i is 6 isPrime is true', 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => 'i is 6 isPrime is false', 'correct' => true]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "2*n", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "n", 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "n - 1", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "n + 1", 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program has a syntax error because the adjustment statement is incorrect in the for loop.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program has a syntax error because the control variable in the for loop cannot be of the double type.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program compiles but does not stop because d would always be less than 10.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program compiles and runs fine.", 'correct' => true]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => '-1', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '0', 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '1', 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => '2', 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "4", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "8", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "16", 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "32", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "64", 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => '1 3 5 7 9 11 13 15', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '1 5 9 13', 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '1 5 9 13 16', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '1 3 5 7 9 11 13 ', 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => '1 4 8 12 ', 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => 'does not print anything.', 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'prints out Welcome to Java one time.', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'prints out Welcome to Java two times.', 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => 'prints out Welcome to Java forever.', 'correct' => false]);

    }

    function quiz6()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 6', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Suppose your method does not return any value, which of the following keywords can be used as a return type?"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The signature of a method consists of ____________."]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Arguments to methods always appear within __________."]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "You should fill in the blank in the following code with ______________.

public class Test {
  public static void main(String[] args) {
    System.out.print(\"The grade is \" + getGrade(78.5));
    System.out.print(\"\\nThe grade is \" + getGrade(59.5));
  }

  public static _________ getGrade(double score) {
    if (score >= 90.0)
      return 'A';
    else if (score >= 80.0)
      return 'B';
    else if (score >= 70.0)
      return 'C';
    else if (score >= 60.0)
      return 'D';
    else
      return 'F';
  }
}"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Given the following method:

static void nPrint(String message, int n) {
  while (n > 0) {
    System.out.print(message);
    n--;
  }
}

Suppose k = 2. What is k after invoking nPrint(\"A message\", k)?"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code:

class Test {
  public static void main(String[] args) {
    System.out.println(xmethod(5));
  }

  public static int xmethod(int n, long t) {
    System.out.println(\"int\");
    return n;
  }

  public static long xmethod(long n) {
    System.out.println(\"long\");
    return n;
  }
}"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

public class Test {
  public static void main(String[] args)  {
    System.out.println(max(1, 2));  
  }

  public static double max(int num1, double num2) {
    System.out.println(\"max(int, double) is invoked\");

    if (num1 > num2)
      return num1;
    else
      return num2;
  }
  
  public static double max(double num1, int num2) {
    System.out.println(\"max(double, int) is invoked\");

    if (num1 > num2)
      return num1;
    else
      return num2;     
  }
}"]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

public class Test {
  public static void main(String[] args)  {
    System.out.println(m(2));  
  }

  public static int m(int num) {
    return num;
  }
  
  public static void m(int num) {
    System.out.println(num);
  }
}"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The actual parameters of a method must match the formal parameters in type, order, and number."]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Methods can be declared in any order in a class."]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => "void", 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "int", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "double", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "public", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "None of the above", 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => "method name", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "method name and parameter list", 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "return type, method name, and parameter list", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "parameter list", 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "brackets [ ]", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "parentheses ( )", 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "curly braces { }", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "quotation marks \" \"", 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => "int", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "double", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "boolean", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "char", 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "void", 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "0", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "1", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "2", 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "3", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "4", 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays int followed by 5.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays long followed by 5.", 'correct' => true]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program runs fine but displays things other than 5.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program does not compile because the compiler cannot distinguish which xmethod to invoke.", 'correct' => false]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => "The program cannot compile because you cannot have the print statement in a non-void method.", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "The program cannot compile because the compiler cannot determine which max method should be invoked.", 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "The program runs and prints 2 followed by \"max(int, double)\" is invoked.", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "The program runs and prints 2 followed by \"max(double, int)\" is invoked.", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "The program runs and prints \"max(int, double) is invoked\" followed by 2.", 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "The program has a compile error because the two methods m have the same signature.", 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "The program has a compile error because the second m method is defined, but not invoked in the main method.", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "The program runs and prints 2 once.", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "The program runs and prints 2 twice.", 'correct' => false]);


        App\Answer::create(['question_id' => $q9->id, 'answer' => "true", 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "false", 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => "true", 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "false", 'correct' => false]);


    }

    function quiz7()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 7', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "If you declare an array double[] list = {3.4, 2.0, 3.5, 5.5}, list[1] is ________."]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "How many elements are in array double[] list = new double[5]?"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code.

public class Test {
  public static void main(String[] args) {
    int[] x = new int[3];
    System.out.println(\"x[0] is \" + x[0]);
  }
}"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code:

public class Test { 
  public static void main(String[] args) { 
    int[] x = new int[5]; 
    int i;
    for (i = 0; i < x.length; i++)
      x[i] = i;
    System.out.println(x[i]);
  }
}"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "In the following code, what is the printout for list1?

class Test {
  public static void main(String[] args) {
    int[] list1 = {1, 2, 3};
    int[] list2 = {1, 2, 3};
    list2 = list1;
    list1[0] = 0; list1[1] = 1; list2[2] = 2;

    for (int i = 0; i < list1.length; i++)
      System.out.print(list1[i] + \" \");
  }
}"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Analyze the following code:

public class Test { 
  public static void main(String[] args) { 
    int[] x = {1, 2, 3, 4}; 
    int[] y = x;

    x = new int[2];

    for (int i = 0; i < x.length; i++)
      System.out.print(x[i] + \" \");
  }
}"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "When you pass an array to a method, the method receives __________."]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Show the output of the following code:

public class Test {
  public static void main(String[] args) {
    int[] x = {1, 2, 3, 4, 5};
    increase(x);

    int[] y = {1, 2, 3, 4, 5};
    increase(y[0]);

    System.out.println(x[0] + \" \" + y[0]);
  }

  public static void increase(int[] x) {
    for (int i = 0; i < x.length; i++)
      x[i]++;
  }

  public static void increase(int y) {
    y++;
  }
}"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "When you return an array from a method, the method returns __________."]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which correctly creates an array of five empty Strings?"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => "3.4", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "2.0", 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "3.5", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "5.5", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "undefined", 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => "4", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "5", 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "6", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "0", 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "The program has a compile error because the size of the array wasn't specified when declaring the array.", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "The program has a runtime error because the array elements are not initialized.", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "The program runs fine and displays x[0] is 0.", 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "The program has a runtime error because the array element x[0] is not defined.", 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => "The program displays 0 1 2 3 4.", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "The program displays 4.", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "The program has a runtime error because the last statement in the main method causes ArrayIndexOutOfBoundsException.", 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "The program has a compile error because i is not defined in the last statement in the main method.", 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "1 2 3", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "1 1 1", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "0 1 2", 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "0 1 3", 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays 1 2 3 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays 0 0", 'correct' => true]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays 0 0 3 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "The program displays 0 0 0 0", 'correct' => false]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => "a copy of the array", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "a copy of the first element", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "the reference of the array", 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "the length of the array", 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "0 0", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "1 1", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "2 2", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "2 1", 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "1 2", 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => "a copy of the array", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "a copy of the first element", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "the reference of the array", 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "the length of the array", 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => "String[] a = new String [5]; ", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "String[] a = {\"\", \"\", \"\", \"\", \"\"}; ", 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "String[5] a; ", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "String[ ] a = new String [5]; for (int i = 0; i &lt; 5; a[i++] = null);", 'correct' => false]);

    }

    function quiz8()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 8', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which statement is correct?"]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Assume double[][] x = new double[4][5], what are x.length and x[2].length?"]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "When you create an array using the following statement, the element values are automatically initialized to 0.
            int[][] matrix = new int[5][5];"]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "How many elements are array matrix (int[][] matrix = new int[5][5])?"]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the printout of the following program?

        public class Test {
          public static void main(String[] args) {
            int[][] values = {{3, 4, 5, 1}, {33, 6, 1, 2}};
        
            int v = values[0][0];
            for (int row = 0; row < values.length; row++)
              for (int column = 0; column < values[row].length; column++)
                if (v < values[row][column])
                  v = values[row][column];
        
            System.out.print(v);
          }
        }"]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "What is the output of the following code?

        public class Test {
          public static void main(String[] args) {
            int[][] matrix =
              {{1, 2, 3, 4},
               {4, 5, 6, 7},
               {8, 9, 10, 11},
               {12, 13, 14, 15}};
        
            for (int i = 0; i < 4; i++)
              System.out.print(matrix[i][1] + \" \");
          }
        }"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Suppose the method p has the following heading:

        public static int[][] p()
        
        What return statement may be used in p()?"]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Assume double[][][] x = new double[4][5][6], what are x.length, x[2].length, and x[0][0].length?"]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Assume boolean[][] x = new boolean[5][7], what is the index variable for the element at the last row and last column in array x?"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Show the printout of the following code.

        public class Test {
          public static void main(String[] args) {
            double[][] m = {{1, 2, 3}, {1.5, 2.5, 3.5}, {0.1, 0.1, 0.1}};
            System.out.println(sum(m));
          }
          
          public static double sum(double[][] m) {
            double sum = 0;
        
            for (int i = 0; i < m.length; i++)
                sum += m[i][i];
        
            return sum;
          }  
        }"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => "char[][] charArray = {'a', 'b'};", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "char[2][2] charArray = {{'a', 'b'}, {'c', 'd'}};", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "char[2][] charArray = {{'a', 'b'}, {'c', 'd'}};", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "char[][] charArray = {{'a', 'b'}, {'c', 'd'}};", 'correct' => true]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => "4 and 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "4 and 5", 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "5 and 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "5 and 5", 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "True", 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "False", 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => "14", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "20", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "25", 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "30", 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "1", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "3", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "5", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "6", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "33", 'correct' => true]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "1 2 3 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "4 5 6 7", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "1 3 8 12", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "2 5 9 13", 'correct' => true]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "3 6 10 14", 'correct' => false]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => "return 1;", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "return {1, 2, 3};", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "return int[]{1, 2, 3};", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "return new int[]{1, 2, 3};", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "return new int[][]{{1, 2, 3}, {2, 4, 5}};", 'correct' => true]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "4, 5, and 6", 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "6, 5, and 4", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "5, 5, and 5", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "4, 5, and 4", 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => "x[4][5]", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "x[4][6]", 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "x[5][6]", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "x[5][7]", 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => "3", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "3.0", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "3.6", 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "4", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "4.0", 'correct' => false]);

    }

    public function quiz9()
    {
        $quiz = App\Quiz::create(['name' => 'Quiz 9', 'total' => 10, 'active' => 0]);

        $q1 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "__________ represents an entity in the real world that can be distinctly identified."]);
        $q2 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "_______ is a construct that defines objects of the same type."]);
        $q3 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "An object is an instance of a __________."]);
        $q4 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The keyword __________ is required to declare a class."]);
        $q5 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "________ is invoked to create an object."]);
        $q6 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following statements is NOT true?"]);
        $q7 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Given the declaration Circle x = new Circle(), which of the following statement is most accurate."]);
        $q8 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "The default value for data field of a boolean type, numeric type, object type is ___________, respectively."]);
        $q9 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Which of the following statement is most accurate?"]);
        $q10 = App\Question::create(['quiz_id' => $quiz->id, 'question' => "Given the declaration Circle[] x = new Circle[10], which of the following statement is most accurate?"]);

        App\Answer::create(['question_id' => $q1->id, 'answer' => "A class", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "An object", 'correct' => true]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "A method", 'correct' => false]);
        App\Answer::create(['question_id' => $q1->id, 'answer' => "A data field", 'correct' => false]);

        App\Answer::create(['question_id' => $q2->id, 'answer' => "A class", 'correct' => true]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "An object", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "A method", 'correct' => false]);
        App\Answer::create(['question_id' => $q2->id, 'answer' => "A data field", 'correct' => false]);

        App\Answer::create(['question_id' => $q3->id, 'answer' => "program", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "class", 'correct' => true]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "method", 'correct' => false]);
        App\Answer::create(['question_id' => $q3->id, 'answer' => "data", 'correct' => false]);

        App\Answer::create(['question_id' => $q4->id, 'answer' => "public", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "private", 'correct' => false]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "class", 'correct' => true]);
        App\Answer::create(['question_id' => $q4->id, 'answer' => "All of the above.", 'correct' => false]);

        App\Answer::create(['question_id' => $q5->id, 'answer' => "A constructor", 'correct' => true]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "The main method", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "A method with a return type", 'correct' => false]);
        App\Answer::create(['question_id' => $q5->id, 'answer' => "A method with the void return type", 'correct' => false]);

        App\Answer::create(['question_id' => $q6->id, 'answer' => "Multiple constructors can be defined in a class.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "Constructors do not have a return type, not even void.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "Constructors must have the same name as the class itself.", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "Constructors are invoked using the new operator when an object is created. ", 'correct' => false]);
        App\Answer::create(['question_id' => $q6->id, 'answer' => "Constructors must have a println statement in the method.", 'correct' => true]);

        App\Answer::create(['question_id' => $q7->id, 'answer' => "x contains an int value.", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "x contains an object of the Circle type.", 'correct' => false]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "x contains a reference to a Circle object.", 'correct' => true]);
        App\Answer::create(['question_id' => $q7->id, 'answer' => "You can assign an int value to x.", 'correct' => false]);

        App\Answer::create(['question_id' => $q8->id, 'answer' => "true, 1, Null", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "false, 0, null", 'correct' => true]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "true, 0, null", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "true, 1, null", 'correct' => false]);
        App\Answer::create(['question_id' => $q8->id, 'answer' => "false, 1, null", 'correct' => false]);

        App\Answer::create(['question_id' => $q9->id, 'answer' => "A reference variable is an object.", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "A reference variable refers to an object.", 'correct' => true]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "An object may not contain other objects.", 'correct' => false]);
        App\Answer::create(['question_id' => $q9->id, 'answer' => "An object may not contain the references of other objects.", 'correct' => false]);

        App\Answer::create(['question_id' => $q10->id, 'answer' => "x contains an array of ten int values.", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "x contains an array of ten objects of the Circle type.", 'correct' => false]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "x contains a reference to an array and each element in the array can hold a reference to a Circle object.", 'correct' => true]);
        App\Answer::create(['question_id' => $q10->id, 'answer' => "x contains a reference to an array and each element in the array can hold a Circle object.", 'correct' => false]);

    }

}
