@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 4 [25 pts]</h2>
        <p>Working with Strings and Math methods</p>
        The purpose of this lab is to give you hands on practice with methods in
        the String and Math classes.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li><tt>OrderCities.java</tt>
            <li><tt>Payroll.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Order City Names [13 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to practice with using Strings.
                First, create a program called <tt>OrderCities</tt>.

            <p>
                <b>[1 pt]</b>
                Set up your program so you can read in 3 city names from the user.

            <p>
                <b>[1 pt]</b>
                Remember to create only <b>one</b> Scanner object when you are setting
                up the keyboard as the input source.

            <p>
                <b>[1 pt]</b>
                Store the city names into three different variables of type
                <tt>String</tt>. Note that a city name may consist of more than one word
                (e.g., Los Angeles).

            <p>
                <b>[1 pt]</b>
                Use the appropriate string comparison methods to compare these three
                variables so that you sort them alphabetically.

            <p>
                <b>[1 pt]</b>
                You sorting should be case insensitive. That is, the user may enter
                "Kelowna" or "kelowna", and in either case, Kelowna should come before
                "Los Angeles".

            <p>
                <b>[6 pts, 1 for each test case]</b>
                Ensure your program works properly by testing it with 3 city names and
                inputting them in 6 different orders when entering the names as input.
                See sample output for these combinations.

            <p>
                Sample output:
      <pre>
Enter the first city:
california
Enter the second city:
Kelowna
Enter the third city:
Los Angeles
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>
            <p>
                Sample output:
      <pre>
Enter the first city:
california
Enter the second city:
Los Angeles
Enter the third city:
kelowna
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>
            <p>
                Sample output:
      <pre>
Enter the first city:
kelowna
Enter the second city:
california
Enter the third city:
los angeles
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>
            <p>
                Sample output:
      <pre>
Enter the first city:
kelowna
Enter the second city:
los Angeles
Enter the third city:
California
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>
            <p>
                Sample output:
      <pre>
Enter the first city:
los Angeles
Enter the second city:
Kelowna
Enter the third city:
California
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>
            <p>
                Sample output:
      <pre>
Enter the first city:
Los Angeles
Enter the second city:
California
Enter the third city:
Kelowna
The cities in alphabetical order are: california, kelowna, los angeles
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Simple Payroll Calculator [12 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise gets you to practice reading in Strings, doing some
                numeric calculations, and printing out decimal numbers nicely.
                First, create a program called <tt>Payroll</tt>.

            <p>
                <b>[1 pt]</b>
                Create a single Scanner object that takes various input from the user.
                You will subsequently store the input into appropriate variables.

            <p>
                <b>[1 pt]</b>
                Ask the user to enter a full name, the number of hours worked in a week,
                the hourly pay rate, the federal tax withholding rate, and the
                provincial tax withholding rate. These rates are to be entered as a
                number between 1.00 and 0.00 to represent the percentage withheld.

            <p>
                <b>[1 pt]</b>
                Based on the input information, calculate the employee gross pay by
                multiplying the number of hours worked by the pay rate. Be sure to
                display this in your output.

            <p>
                <b>[1 pt for calculation, 1 pt for printing]</b>
                Based on the input information, determine the dollar amount to be
                withheld federally and provincially, as well as a sum of the total
                deductions. Display that information you used in the calculation,
                ensuring that the taxes withheld are shown in percentages first, and
                then in the actual amounts.

            <p>
                <b>[1 pt]</b>
                Thereafter, calculate the net pay by taking the gross pay and
                subtracting the total deductions. Also, display this back to the user.

            <p>
                Sample output:
      <pre>
Enter employee's name: John Smith
Enter number of hours worked in a week: 10.5
Enter hourly pay rate: 13.45
Enter federal tax withholding rate: 0.20
Enter state tax withholding rate: 0.01
Employee Name: John Smith

Hours Worked: 	10.5
Pay Rate: 	$13.45
Gross Pay: 	$141.225
Deductions:
	Federal Withholding (20%):   	$28.25
	Provincial Withholding (1%):	$1.41
	Total Deduction: $29.66
Net Pay: $111.57
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
                In formatting your output, use "\n" to produce an extra newline after
                displaying the name.

            <p>
                <b>[1 pt]</b>
                In formatting your output, use "\t" to align the dollar amounts and
                deductions nicely.

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