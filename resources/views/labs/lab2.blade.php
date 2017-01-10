@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 2 [20 pts]</h2>
        <p>Diving into Programming</p>
        The purpose of this lab is to give you hands on practice with writing
        small Java programs and getting used to the Eclipse environment.
        If you need clarification with any of the steps below, ask your TA and/or
        your neighbour.
        <p> </p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 2 (nothing to submit)
            <li><tt>CalculateSnowToRain.java</tt>
            <li><tt>CalculateInvestment.java</tt>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
            At the beginning of the lab, show your TA for completing at least one
            attempt for Quiz 1.
            <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Snowfall to Rainfall Estimation [9 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise helps you practice using variables, arithmetic
                expressions, and Scanner objects.
                First, create a program called <tt>CalculateSnowToRain</tt>.

            <p>
                <b>[1 pt]</b>
                Be sure to always save your file with the same name as your class. In
                this case, your file will be called <tt>CalulateSnowToRain.java</tt>.
                For now, just have a simple statement that displays "The total expected
                amount of rainfall is ". We will handle the calculations in the next few
                steps. Run it and make sure it works as expected before going on.

            <p>
                Sample output (so far):
            <pre>
The total expected amount of rainfall is
      </pre>
            <p>
                <b>[1 pt for prompting the user for input, 1 pt for storing inputs]</b>
                Estimating the amount of rain that results from snow is particularly
                useful when trying to determine the amount of water added to aquafers or
                lakes in the area. According to the National Weather Service, 14 inches
                of powdery snow converts to approximately 1 inch of rain, 8 inches of
                web, compact snow converts to 1 inch of rain, and 10 inches of average
                snow converts to 1 inch of rain.
                In your program, prompt the user to enter the amount of each type of
                snow in inches.
                <b>Hint: </b> You may want to use 3 separate variables to store the 3
                types of snow information.

            <p>
                <b>[1 pt]</b> Be sure to only create one <tt>Scanner</tt> object, even
                though you need to read in different values from the user.

            <p>
                <b>[1 pt]</b> Convert the snowfall values to expected rainfall values to
                get a single total (in inches).

            <p>
                <b>[1 pt]</b> Convert the total expected rainfall from inches to
                centimeters. Note that one inch is 2.54 centimeters. Store this into a separate
                variable for decimal numbers and use a meaningful name.

            <p>
                <b>[1 pt]</b> Go back and modify the original <tt>println</tt> statement
                you wrote at the beginning and now have it display the rainfall amount
                in centimeters that you calculated. Make sure to display that your
                number is in centimeters.

            <p>
                Sample output:
            <pre>
Enter the amount of average snow fall (in inches):
4
Enter the amount of wet snow fall (in inches):
2
Enter the amount of powdery snow fall (in inches):
6
The total expected amount of rainfall is 355.6 cm.
      </pre>

            <p>
                <b>[1 pt]</b> Lastly, be sure to write comments above your class to
                indicate the author of this file (you), acknowledgements for any
                external help you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Calculating Investment Values [10 pts]</h3>
        </div>
        <div class="panel-body">
            <p>
                <b>[1 pt]</b>
                This exercise helps you practice using variables, arithmetic
                expressions, and Scanner objects.
                First, create a program called <tt>CalculateInvestment</tt>.

            <p>
                <b>[1 pt]</b>
                Be sure to always save your file with the same name as your class.

            <p>
                <b>[1 pt for prompting the user for input, 1 pt for storing inputs]</b>
                This program computes the future investment value based on an initial
                investment amount, annual interest rate, and the number of years of
                investment. For now, prompt the user to enter these values as input.

            <p>
                <b>[1 pt]</b> Be sure to only create one <tt>Scanner</tt> object, even
                though you need to read in multiple values from the user.

            <p>
                <b>[1 pt for formula, 1 pt for Math.pow]</b> Calculate the future
                investment amount based on the following formula:
            <p>
                <img width=400 src=images/investFormula.png>
            <p>
                Note that you will need to compute the power of a number. To do this,
                use <tt>Math.pow(a,b)</tt> to calculate "a to the power of b".  Similar
                to <tt>System.out.println</tt>, this is another predefined method that
                is available for you to use in your programs. We will see other
                predefined methods that we can use to make more powerful programs in the
                upcoming weeks.

            <p>
                <b>[1 pt]</b> Display the future, accumulated amount that you just
                calculated back to the user.

            <p>
                <b>[1 pt]</b> Check your program calculation with the sample output
                below. Ensure you are converting the input investment rate (which was an
                annual rate) into a monthly rate (which is required by the formula).

            <p>
                Sample output:
            <pre>
      Enter investment amount:
      1000
      Enter annual interest rate in percentage:
      3.25
      Enter number of years:
      1
      Accumulated value is 1032.9885118105894
      </pre>
            <p>
                Sample output:
            <pre>
      Enter investment amount:
      1000.56
      Enter annual interest rate in percentage:
      4.25
      Enter number of years:
      1.5
      Accumulated value is 1066.302672612657
      </pre>
            <p>

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