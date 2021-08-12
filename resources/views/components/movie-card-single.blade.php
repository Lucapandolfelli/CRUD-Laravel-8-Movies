@props(['movie'])

<div class="col-md-2 single-card">
    <a href="{{ route('movie', $movie->id) }}"><img class="single-card-img img-fluid rounded-start" src="/images/{{ $movie->poster }}"></a>
</div>