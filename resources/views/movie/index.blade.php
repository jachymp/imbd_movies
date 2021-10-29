@extends('common/layout')

<h1>List of best movies</h1>

<ol>
    @foreach ($movies as $movie)
        <li><a href="movie/{{$movie->id}}">{{$movie->name}}</a> - {{$movie->rating}}</li>
    @endforeach
</ol>