@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="d-flex" action="/search" method="GET">
                    <input name="search" class="form-control me-2" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="card-body">
                    <div class="card" style="width: 81rem; height: auto; margin-bottom: 50px; margin-top: 50px;">
                        <div class="card-body">
                            <img src={{ $detail['Poster'] }} class="card-img" alt="..."
                            style="width: auto; height: auto; margin-bottom: 50px">
                            <h5 class="card-title">Title:  {{ $detail['Title'] }}</h5>
                            <p class="card-text">Year:  {{ $detail['Year'] }}</p>
                            <p class="card-text">imdbDB:  {{ $detail['imdbID'] }}</p>
                            <p class="card-text">Rated: {{ $detail['Rated'] }}</p>
                            <p class="card-text">Released: {{ $detail['Released'] }}</p>
                            <p class="card-text">Runtime: {{ $detail['Runtime'] }}</p>
                            <p class="card-text">Genre: {{ $detail['Genre'] }}</p>
                            <p class="card-text">Director: {{ $detail['Director'] }}</p>
                            <p class="card-text">Writer: {{ $detail['Writer'] }}</p>
                            <p class="card-text">Actors: {{ $detail['Actors'] }}</p>
                            <p class="card-text">Plot: {{ $detail['Plot']}}</p>
                            <p class="card-text">Language: {{$detail['Language']}}</p>
                            <p class="card-text">Country: {{$detail['Country']}}</p>
                            <p class="card-text">Awards: {{ $detail['Ratings'][0]["Source"] ?? '' }} {{ $detail['Ratings'][0]["Value"] ?? '' }}</p>
                            <p class="card-text">Metascore: {{ $detail['Metascore'] }}</p>
                            <p class="card-text">imdbRating: {{ $detail['imdbRating']}}</p>
                            <p class="card-text">imdbVotes: {{ $detail['imdbVotes']}}</p>
                            <p class="card-text">Type: {{ $detail['Type']}}</p>
                            <p class="card-text">DVD: {{ $detail['DVD']}}</p>
                            <p class="card-text">BoxOffice: {{ $detail['BoxOffice']}}</p>
                            <p class="card-text">Production: {{ $detail['Production']}}</p>
                            <p class="card-text">Website: {{$detail['Website']}}</p>
                            <a href="/" class="btn btn-primary">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
