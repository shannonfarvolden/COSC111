@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 3 [xx pts]</h2>
        <p>Due: Sunday 9:00am on April 01st</p>
        Brief overview
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Items to submit 
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
		    Description
            <p>
        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
  
        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[1 pt]</b> xxx
        </ul>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
		    Description
            <p>
        Be sure to write comments above your class to indicate the
        author of this file (you), acknowledgements for any external help you
        got, and what the purpose of this program is.
  
        <p>
        <b>Grading Scheme</b>:
        <ul>
          <li> <b>[2 pts]</b> Comments to explain program logic
          <li> <b>[1 pt]</b> xxx
        </ul>

        </div>
    </div>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Assignments',
            page: '/assignments'
        });
    </script>
@endsection
