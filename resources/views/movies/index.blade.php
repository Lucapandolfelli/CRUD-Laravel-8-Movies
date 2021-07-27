<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <a type="button" href="{{ route('movies.create') }}" class=" my-3 btn btn-primary">Create</a>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">YEAR</th>
                                <th scope="col">DIRECTOR</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">POSTER</th>
                                <th scope="col">GENRES</th>
                                <th class="text-center" scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td scope="row">{{ $movie->id }}</td>
                                <td scope="row">{{ $movie->title }}</td>
                                <td scope="row">{{ $movie->year }}</td>
                                <td scope="row">{{ $movie->director->name }}</td>
                                <td scope="row">{{ $movie->description }}</td>
                                <td scope="row">
                                    <img src="/images/{{ $movie->poster }}" width="30%">
                                </td>
                                <td scope="row">{{ $movie->year }}</td>
                                <td scope="row">
                                    <div class="d-flex justify-content-center">
                                        <a class="me-2 btn btn-primary" href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="deleteForm">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mb-3">
                        {!! $movies->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

