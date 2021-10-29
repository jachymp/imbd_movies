@extends('common/layout')

<h1>{{$movie->name}}</h1>
<p>Year: {{$movie->year}}</p>
<p>Votes: {{$movie->votes_nr}}</p>
<p>Rating: {{$movie->rating}}</p>

<h3>Already reviewed:</h3>
<ul>
@foreach ($movie->reviews as $review)
    <li>
        <p>Rate: {{$review->rate}} - Comment: {{$review->comment}}</p>
    </li>
@endforeach
</ul>


<h3>Create review:</h3>
<form action="/movie/{{$movie->id}}" method="post">
    @csrf
    <label for="rate">Rate {{$movie->name}}</label>
    <br>
    <input type="number" name="rate" id="rate">
    <br>
    <br>
    <label for="comment">Write your review:</label>
    <br>
    <textarea name="comment" id="comment" cols="50" rows="10"></textarea>
    <br>
    <br>
    <button>Save review</button>

</form>