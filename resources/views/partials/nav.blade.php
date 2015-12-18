<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">COSC 111</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Discussion Forum</a></li>
                <li><a href="#">Slides</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">My Grades</a></li>
                <li><a href="#">My Stats</a></li>
                <li><a href="#">My Notes</a></li>
                {{--@if (Auth::guest())--}}
                <li><a href="#">Login</a></li>
                {{--else show profile name with {{ Auth::user()->name }}--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>