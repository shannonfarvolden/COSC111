@extends('app')

@section('content')
  <div class="jumbotron">
    <h2>Assignment 1 [26 pts]</h2>
    <p>Due: Sunday 9:00am on Jan 28th</p>
    TBA
    <p></p>
    <b>What to Submit:</b>
    <ul>
      <li>TBA
    </ul>
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
