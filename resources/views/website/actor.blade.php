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
                <ul>
                    @foreach($actor->actors_movies as $movies)
                        <li><a href="{{ route('movie', $movies->id) }}">{{ $movies->title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection