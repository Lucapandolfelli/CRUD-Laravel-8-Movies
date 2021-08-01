<x-template>
    @section('main-content')
        <h1 class="text-center page-title">Actors</h1>
        <div class="my-4 container d-flex justify-content-center">
            <div class="row">
                @foreach($actors as $actor)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('actor', $actor->id) }}"><img src="/images/{{ $actor->image }}" class="card-img-top"></a>
                            <div class="card-body">
                                <a href="{{ route('actor', $actor->id) }}" style="text-decoration: none;color: black;"><h5 class="card-title">{{ $actor->name }}</h5></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</x-template>