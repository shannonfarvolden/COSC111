@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 2 [xx pts]</h2>
        <p>Diving into Programming</p>
        The purpose of this lab is to give you hands on practice with writing
        small Java programs and getting used to the Eclipse environment. 
        If you need clarification with any of the steps below, ask your TA
        and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 2 (nothing to submit)
            <li>BMIcalc.java 
            <li>xx
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
            At the beginning of the lab, show your TA for completing at least one
            attempt for Quiz 2.
            <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Calculating BMI [xx pts]</h3>
        </div>
        <div class="panel-body">
            <b>[1 pt]</b>
            This exercise helps you practice using variables, arithmetic
            expressions, and Scanner objects. 
            First, create a program called <tt>BMIcalc</tt>.
            <p>

            <b>[1 pt]</b>
            Be sure to always save your file with the same name as your class. In
            this case, your file will be called <tt>BMIcalc.java</tt>.
            For now, just have a simple statement that displays "Your BMI in
            metric units is ". We will handle the calculations in the next few
            steps. Run it and make sure it works as expected before moving on.

            <p>
            Sample output (so far):
            <pre>
Your BMI in metric units is 
            </pre>

            <p>
            <b>[1 pt for prompting the user for input, 1 pt for storing inputs]</b>
            Body mass index (BMI) is a measure of a person's health based on
            their weight (in kilograms) and height (in meters). However, our
            Canadian medical system typically measures weight and height using
            different metrics. In your program, prompt the user to enter a
            weight in pounds and height in inches.

            <p>
            <b>[1 pt]</b> 
            Be sure to only create one Scanner object, even though you need to
            read in two different values from the user.

            <p>
            <b>[1 pt]</b> 
            Convert the weight you got from pounds to kilograms. Note that 1
            kg is 2.2 pounds. Store this into a separate variable for decimal
            numbers and use a meaningful name.
            You will want to display the conversion in the output (just in
            case there are any logical errors).

            <p>
            <b>[1 pt]</b> 
            Convert the height you got from inches to meters. Note that 1 inch
            is 0.0254 meters. Store this into a separate variable for decimal
            numbers and use a meaningful name.
            You will want to display the conversion in the output (just in
            case there are any logical errors).

            <p>
            <b>[1 pt]</b> 
            Do the BMI calculation by taking the weight in kilograms and
            dividing it by the square of the height in meters. Store this into
            a separate variable for decimal numbers and use a meaningful name.

            <p>
            <b>[1 pt]</b> 
            Go back and modify the original println statement you wrote at the
            beginning and now have it display the BMI that you calculated.

            <p>
            Sample output:
            <pre>
Enter your weight in pounds: 
125
Enter your height in inches: 
62
Your weight in kilos 56.81818181818181
Your height in meters 1.5748
Your BMI is 22.910603005956744 kg/m^2.
            </pre>

            <p>
            Note: The recommended BMI value for good health in adults is
            between 18.5 and 25.

            <p>
            <b>[1 pt]</b> 
            Lastly, be sure to write comments above your class to indicate the
            author of this file (you), acknowledgements for any external help
            you got, and what the purpose of this program is.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Properties of a Rectangle [xx pts]</h3>
        </div>
        <div class="panel-body">
            <b>[1 pt]</b> 
            This exercise helps you practice using variables, arithmetic
			expressions, and Scanner objects. First, create a program called
			<tt>Rectangle</tt>.
            <p>

            <b>[1 pt]</b> 
            Be sure to always save your file with the same name as your class.
            <p>

            <b>[1 pt]</b> 
            This program computes various properties of a rectangle, such as
			perimeter, area, and the length of its diagonal. 
			For now, prompt the user to enter the width and the height as
			input. Let us denote these variables as <it>w</it> and </it>h</it>
			respectively.
			(Don't worry about the unit of measurement to use.)
            <p>

            <b>[1 pt]</b> 
            Be sure to only create one Scanner object, even though you need to
			read in multiple values from the user.
            <p>

            <b>[1 pt for calculations, 1 pt for Math.sqrt]</b> 
            Calculate the perimeter as <it>2(w + h)</it>. 
            Next, calculate the area as <it>w * h</it>. 
			Finally, calculate the length of the diagonal using Pythagarus
			Theorem, so that the length is the square root of <it>w^2 +
			h^2</it> (the notation <it>^2</it> denotes raised to the power of
			2).
            <p>

            <b>[1 pt]</b> 
            Display the calculated results back to the user.
            <p>

            Sample output:
            <pre>
Enter the width of a rectangle as an integer: 
30
Enter the height of a rectangle as an integer: 
23
The perimeter is 106
The area is 690
The length of the diagonal is 37.8021163428716
            </pre>

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
