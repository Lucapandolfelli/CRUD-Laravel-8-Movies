@extends('components.template')

@section('main-content')
    <div class="container my-5">
        <div class="row mb-4">
            <div class="h-50 col-md-4 d-flex justify-content-center">
                <img class="img-fluid rounded-start" src="/images/{{ $director->image }}" width="80%">
            </div>
            <div class="col-md-8">
                <?php
                    use Carbon\Carbon;
                    $age = Carbon::parse($director->birthday)->age;
                ?>
                <h2 class="mb-3 card-title">{{ $director->name }}</h2>
                <p class="card-details"><b>Nationality:</b> {{ $director->nationality }} - <b>Age:</b> <?php echo $age; ?> years</p>
                <p class="mt-2 card-content">{{ $director->biography }}</p>
            </div>
        </div>
        <hr>
        <h4 class="mt-4 text-uppercase card-details">> More films by {{ $director->name }}</h4>
        <div class="my-4 container d-flex">
            <div class="row">
                @foreach($movies as $movie)
                    <x-movie-card :movie="$movie"></x-movie-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection