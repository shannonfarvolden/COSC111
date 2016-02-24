<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COSC 111</title>

    {{--Css--}}
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/app.css">
    {{---Fonts--}}
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:600,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

    @yield('head')

</head>
<body>

@include('partials.nav')

<div class="container">
    @yield('content')
</div>

{{--Javascript--}}
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/libs.js"></script>

{{--Google Analytics--}}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    <?php
    if (Auth::check()) {
        $gacode = "ga('create', 'UA-71941716-1', 'auto', {'userId': '%s'});";
        $gacode2 = "ga('set', 'dimension1', '%s');";
        echo sprintf($gacode, Auth::user()->id);
        echo sprintf($gacode2, Auth::user()->id);

    } else {
        $gacode = "ga('create', 'UA-71941716-1', 'auto');";
        echo sprintf($gacode);
    }
   ?>
</script>
@yield('footer')

<script>

</script>

</body>
</html>