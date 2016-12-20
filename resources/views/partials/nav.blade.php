<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">COSC 111</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/thread') }}">Discussion Forum</a></li>
                <li><a href="{{ url('/slideset') }}">Slides</a></li>
                <li><a href="{{ url('/quiz') }}">Quizzes</a></li>
                <li><a href="{{ url('/submission') }}">Submissions</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Labs<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ url('/lab1') }}">Lab 1</a></li>
                        <li><a href="{{ url('/lab2') }}">Lab 2</a></li>
                        <li><a href="{{ url('/lab3') }}">Lab 3</a></li>
                        <li><a href="{{ url('/lab4') }}">Lab 4</a></li>
                        <li><a href="{{ url('/lab5') }}">Lab 5</a></li>
                        <li><a href="{{ url('/lab6') }}">Lab 6</a></li>
                        <li><a href="{{ url('/lab7') }}">Lab 7</a></li>
                        <li><a href="{{ url('/lab8') }}">Lab 8</a></li>
                        <li><a href="{{ url('/lab9') }}">Lab 9</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/survey') }}">Surveys</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Assignments<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ url('/assignment1') }}">Assignment 1</a></li>
                        <li><a href="{{ url('/assignment2') }}">Assignment 2</a></li>
                        <li><a href="{{ url('/assignment3') }}">Assignment 3</a></li>
                    </ul>
                </li>
                @if(Auth::check() && Auth::user()->admin)
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/register') }}">Create Account</a></li>
                    <li><a href="{{ url('/auth/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ action('UsersController@show', Auth::user()) }}">My Grades</a></li>
                            <li><a href="{{ url('/stats') }}">My Stats</a></li>
                            <li><a href="{{ url('/consent') }}">Consent Form</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>