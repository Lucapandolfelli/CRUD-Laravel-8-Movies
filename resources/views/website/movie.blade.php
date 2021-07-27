<x-template>
    @section('main-content')
        <div class="container my-5">
            <div class="row">
                <div class="h-50 col-md-4 d-flex justify-content-center">
                    <img class="img-fluid rounded-start" src="/images/{{ $movie->poster }}" width="80%">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3 card-title">{{ $movie->title }} ({{ $movie->year }})</h2>
                    <p class="card-details">Directed by <a class="card-link" href="{{ route('director', $movie->director->id) }}">{{ $movie->director->name }}</a> - Genres:
                    @foreach ($movie->genres as $genre)
                        <a href="{{ route('genre', $genre) }}" class="btn btn-primary btn-sm">{{ $genre->name }}</a>
                    @endforeach
                    </p>
                    <p class="mt-2 card-content">{{ $movie->plot }}</p>
                </div>
            </div>
        </div>
    @endsection
</x-template>