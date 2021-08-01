@extends('components.template')

@section('main-content')
    <div class="container my-5">
        <div class="row mb-4">
            <div class="h-50 col-md-4 d-flex justify-content-center">
                <img class="img-fluid rounded-start" src="/images/{{ $actor->image }}" width="80%">
            </div>
            <div class="col-md-8">
                <?php
                    use Carbon\Carbon;
                    $age = Carbon::parse($actor->birthday)->age;
                ?>
                <h2 class="mb-3 card-title">{{ $actor->name }}</h2>
                <p class="card-details"><b>Nationality:</b> {{ $actor->nationality }} - <b>Age:</b> <?php echo $age; ?> years</p>
                <p class="mt-2 card-content">{{ $actor->biography }}</p>
            </div>
        </div>
        <hr>
        <h4 class="mt-4 text-uppercase card-details">> Films of {{ $actor->name }}</h4>
        <div class="my-4 container d-flex">
            <div class="row">
                @foreach($actor->actors_movies as $movie)
                    <x-movie-card-single :movie="$movie"></x-movie-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection