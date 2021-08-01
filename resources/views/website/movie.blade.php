<x-template>
    @section('main-content')
        <div class="container my-5">
            <div class="row">
                <div class="h-50 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid rounded-start" src="/images/{{ $movie->poster }}" width="80%">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3 card-title">{{ $movie->title }} ({{ $movie->year }})</h2>
                    <p>Directed by <a class="card-link" href="{{ route('director', $movie->director->id) }}">{{ $movie->director->name }}</a></p>
                    <p class="mt-2 card-content">{{ $movie->plot }}</p>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-end">
                <div class="col-md-8">
                    <ul class="d-flex page-nav-list">
                        <li><a id="btn-actors" class="btn page-nav-btn">Cast</a></li>
                        <li><a id="btn-genres" class="btn page-nav-btn">Genres</a></li>
                        <li><a id="btn-description" class="btn page-nav-btn">Description</a></li>
                    </ul>
                </div>
                <hr style="margin: 0;">
            </div>
            <div class="row d-flex justify-content-end">
                <div class="col-md-8" style="padding-right: 0;">
                    <p id="actors-content" class="page-nav-content">
                        @foreach($movie->actors as $actor)
                            <a href="{{ route('actor', $actor->id) }}" class="btn btn-grey btn-sm">{{ $actor->name }}</a>
                        @endforeach
                    </p>
                    <p id="genres-content" class="page-nav-content">
                        @foreach ($movie->genres as $genre)
                            <a href="{{ route('genre', $genre) }}" class="btn btn-grey btn-sm">{{ $genre->name }}</a>
                        @endforeach
                    </p>
                    <p id="description-content" class="page-nav-content" style="margin: 0; text-align: justify;">
                        {{ $movie->description }}
                    </p>
                </div>
            </div>
        </div>
    @endsection
</x-template>