@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 3 [xx pts]</h2>
        <p>Practicing Conditionals</p>
        The purpose of this lab is to give you hands on practice designing and
        organizing conditional statements. If you need clarification with any
        of the steps below, ask your TA and/or your neighbour.
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Show your TA you have completed Quiz 3 (nothing to submit)
            <li>Items to submit xx
            <li>WhoIsOlder.java
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Completed quiz mark [1 pt]</h3>
        </div>
        <div class="panel-body">
        At the beginning of the lab, show your TA for completing at least one
        attempt for Quiz 3.
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
        Description
        <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">3. Compare Birthdates [xx pts]</h3>
        </div>
        <div class="panel-body">
        <b>[1 pt]</b>
        This exercise gives you practice designing and organizing
        if-statements. 
        First, create a program called <tt>WhoIsOlder</tt>.
        <p>

        <b>[1 pt]</b>
        Prompt the user for your birthday and your friend's birthday in a
        specific format: enter the year (as an integer with 4 digits),
        enter the month (as an integer from 1 to 12), and enter the day (as an
        integer with 2 digits).
        <p>

        <b>[1 pt]</b>
        To keep date ranges reasonable, ensure that the year entered is
        between 1900 and the current year. Also, check that the month entered
        is between 1 and 12 (inclusive).
        <p>

        <b>[1 pt]</b>
        Next, check that the day entered is within a valid range based on the
        month entered and/or the year entered. For example, November only has
        30 days, and February only has 28 days on non-leap years.
        (Hint: Recall the leap year definition and code from the textbook and
        the slides.)
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
1899
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
1
Day of birth: 
1
Your birth year must be between 1900 and 2018
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
0
Day of birth: 
31
Your friend's birth month must be between 1 and 12
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2016
Month of birth (as an integer from 1 to 12): 
2
Day of birth: 
29
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2015
Month of birth (as an integer from 1 to 12): 
2
Day of birth: 
29
Your friend's birth day must be between 1 and 28
        </pre>
        <p>

        <b>[4 pts, one per case]</b>
        Once you have validated the two input dates, you can compare them to
        see who is older. You will want to consider the following cases:
        <ul>
        <li> One person is born in an earlier year
        <li> Two people are born in the same year, one is born in an earlier
        month
        <li> Two people are born in the same year and month, one is born on an
        earlier day
        <li> Two people are born in the same year, same month, and same day 
        </ul>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2011
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
You are older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
8
Day of birth: 
12
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2010
Month of birth (as an integer from 1 to 12): 
3
Day of birth: 
19
Your friend is older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2007
Month of birth (as an integer from 1 to 12): 
5
Day of birth: 
11
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2007
Month of birth (as an integer from 1 to 12): 
5
Day of birth: 
23
You are older!
        </pre>
        <p>

        Sample output:
        <pre>
Enter your birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
Enter your friend's birthday as follows... 
Year of birth (all 4 digits): 
2000
Month of birth (as an integer from 1 to 12): 
12
Day of birth: 
31
You are the same age!
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
