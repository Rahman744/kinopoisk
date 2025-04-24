<!DOCTYPE html>
<html>
<head>
    <title>Список фильмов</title>
</head>
<body>
<h1>Список фильмов</h1>

@if($movies->count())
    <ul>
        @foreach(movies asmovie)
            <li>
                <strong>{{ movie->title </strong> (movie->year }})<br>
                    Описание: {{ $movie->description }}
            </li>
        @endforeach
    </ul>
@else
    <p>Фильмов пока нет.</p>
@endif

</body>
</html>
