<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Список фильмов</title>
</head>
<body>
<h1>Список фильмов</h1>
<ul>
    @foreach ($movies as $movie)
        <li>
            <strong>{{ $movie->title }}</strong> ({{ $movie->year }}) —
            <em>{{ $movie->genre->name ?? 'Без жанра' }}</em><br>

            <small>Актёры:
                @foreach ($movie->actors as $actor)
                    {{ !$loop->first ? ', ' : '' }}{{ $actor->name }}
                @endforeach
            </small><br>

            <strong>Оценка:</strong>
            @if ($movie->reviews->count() > 0)
                {{ round($movie->reviews->avg('rating'), 1) }} / 10
            @else
                Нет оценок
            @endif
            <br>

            <strong>Отзывы:</strong>
            <ul>
                @forelse ($movie->reviews as $review)
                    <li>
                        <em>{{ $review->user->name ?? 'Аноним' }}:</em> {{ $review->content }}
                    </li>
                @empty
                    <li>Пока нет отзывов.</li>
                @endforelse
            </ul>
        </li>
    @endforeach
</ul>
</body>
</html>
