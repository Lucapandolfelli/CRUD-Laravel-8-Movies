@props(['movie'])

<div class="col-md-6">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <a href="{{ route('movie', $movie->id) }}"><img class="img-fluid rounded-start" src="/images/{{ $movie->poster }}"></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a class="card-link card-title" href="{{ route('movie', $movie->id) }}"><h5 class="card-title">{{ $movie->title }}</h5></a>
                    <small class="card-details">{{ $movie->year }} - Directed by <a class="card-link" href="{{ route('director', $movie->director->id) }}">{{ $movie->director->name }}</a></small>
                    <p class="mt-2 card-text">{{ $movie->description }}</p>
                    <a href="{{ route('movie', $movie->id) }}" class="card-text card-link"><small class="text-muted">See more...</small></a>
                </div>
            </div>
        </div>
    </div>
</div>