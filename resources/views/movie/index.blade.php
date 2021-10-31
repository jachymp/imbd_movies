@extends('common/layout', ['title'=>'Ranked movies'])

@section('content')
<div class="movie-list__container">
    <h1 class="movie-list__header">List of best movies</h1>

        <div class="movie-list__list" id="movie-list">
            {{-- @foreach ($movies as $movie)
                <li><a href="movie/{{$movie->id}}">{{$movie->name}}</a> - {{$movie->rating}}</li>
                @endforeach --}}
        </div>

    </div>

        <div class="movie-list__button-holder">
            <button type="button" id="up" class="movie-list__button">up</button>
            <button type="button" id="down" class="movie-list__button">down</button>
        </div>



            <script>    
                const movies = {!! json_encode($movies->toArray(), JSON_HEX_TAG) !!};
                const list = document.querySelector('.movie-list__list');
                const up = document.querySelector('#up');
                const down = document.querySelector('#down');

                let listValue = 1;
                let listJump = 10;
                let listEnd = listValue + listJump;

                down.addEventListener('click', () => {
                    if(listValue <= movies.length) {
                    listEnd += listJump;
                    printList();
                    }
                })

                up.addEventListener('click', () => {
                    if(listValue > 11) {
                    listValue -= 2*listJump;
                    listEnd -= listJump;
                    printList();
                    }
                })

                const printList = () => {
                    list.innerHTML = "";
                    while(listValue < listEnd) {
                        list.innerHTML += '<div class="movie-list__list-item"><span class="movie-list__rank">' + listValue + '</span>: ' + '<a href="movie/' + movies[listValue - 1]['id'] + '" class="movie-list__title">' + movies[listValue - 1]['name'] + '</a> | ' + movies[listValue - 1]['rating'] + '</div>';
                        listValue++;
                    }
                }
              
                printList();
            </script>    



@endsection