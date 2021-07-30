<x-template>
    @section('main-content')
        <h1 class="text-center page-title">Directors</h1>
        <div class="my-4 container d-flex justify-content-center">
            <div class="row">
                @foreach($directors as $director)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('director', $director->id) }}"><img src="/images/{{ $director->image }}" class="card-img-top"></a>
                            <div class="card-body">
                                <a href="{{ route('director', $director->id) }}" style="text-decoration: none;color: black;"><h5 class="card-title">{{ $director->name }}</h5></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</x-template>