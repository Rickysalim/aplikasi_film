@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="d-flex" action="/search" method="GET">
                    <input name="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button name="scroll" class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            @foreach ($response as $item)
                <div class="col-3">
                    <div class="card" style="width: 18rem; height: 32rem; margin-bottom: 50px; margin-top: 50px;">
                        <div class="card-body">
                            <img src={{ $item['Poster'] }} class="card-img" alt="..."
                                style="width: 16rem; height: 16rem; margin-bottom: 50px">
                            <h5 class="card-title">{{ $item['Title'] }}</h5>
                            <p class="card-text">Year: {{ $item['Year'] }}</p>
                            <p class="card-text">imdbDB: {{ $item['imdbID'] }}</p>
                            <a href="/search/{{ $item['imdbID'] }}" class="btn btn-primary">DETAIL</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
