<!DOCTYPE html>
<html lang="">
<head>
    <title>Movies</title>
    <style>
        .movie-card {
            margin-bottom: 30px;
        }
        .movie-poster {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Список фильмов</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 movie-card">
                <div class="card h-100">
                    @if($movie->poster)
                        <img src="{{ asset('images/movies/' . $movie->poster) }}" class="card-img-top movie-poster" alt="{{ $movie->title }}">
                    @else
                        <img src="{{ asset('images/movies/default.jpg') }}" class="card-img-top movie-poster" alt="Нет изображения">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }} ({{ $movie->year }})</h5>
                        <p class="card-text"><strong>Жанр:</strong> {{ $movie->genre->name ?? 'Без жанра' }}</p>
                        <p class="card-text"><strong>Актёры:</strong>
                            @foreach ($movie->actors as $actor)
                                {{ !$loop->first ? ', ' : '' }}{{ $actor->name }}
                            @endforeach
                        </p>
                        <p class="card-text"><strong>Оценка:</strong>
                            @if ($movie->reviews->count() > 0)
                                {{ round($movie->reviews->avg('rating'), 1) }} / 10
                            @else
                                Нет оценок
                            @endif
                        </p>
                        <p class="card-text"><strong>Отзывы:</strong></p>
                        <ul>
                            @forelse ($movie->reviews as $review)
                                <li><em>{{ $review->user->name ?? 'Аноним' }}:</em> {{ $review->content }}</li>
                            @empty
                                <li>Пока нет отзывов.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
