@props(['movie'])

<div class="col-md-2 single-card">
    <a href="{{ route('movie', $movie->id) }}"><img class="img-fluid rounded-start" src="/images/{{ $movie->poster }}"></a>
</div>