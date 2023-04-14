@extends('layouts.app')
@section('content')
    <div class="container p-4">
        <h1>Lista Film</h1>
        <div class="row gap-2">
            @forelse ($movies as $movie)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                            <p>Nazionalià:
                                <span class="text-primary">{{ $movie->nationality }}</span>
                            </p>
                            <p>Voto:
                                <span class="text-danger">{{ $movie->vote }}</span>
                            </p>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse
        </div>

    </div>
@endsection