<!DOCTYPE html>
<html lang="">
<head>
    <title>Фильмы</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Список фильмов</h1>
<ul>
    @foreach ($movies as $movie)
        <li>
            <strong>{{ $movie->title }}</strong> <em>({{ $movie->year }})</em>
        </li>
    @endforeach
</ul>
</body>
</html>
