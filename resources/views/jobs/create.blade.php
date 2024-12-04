@extends('layout')
@section('content')
    <h2>create jobs
    </h2>
    <form action="/jobs" method="post">
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" ><br>
        <label for="description">Job Description:</label>
        <input type="text" id="description" name="description" ><br>
        <input type="submit" value="Submit">
        </form>
      @endsection
